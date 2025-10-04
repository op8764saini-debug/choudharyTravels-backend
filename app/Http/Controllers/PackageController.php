<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function admin_package(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = package::where('car_name','LIKE',"%$search%")->orwhere('description','LIKE',"%$search")->get();
        }else{
            $data = package::all();
        }
        
    return view('admin.fronted.package',['pk_data'=>$data,'search'=>$search]);
    }
    public function package_create(){
        return view('admin.fronted.package_create');
        }
        public function package_create_post(Request $request){
            $create = package::create();
            $create->car_name =$request->car_name;

    
            if ($request->hasFile('image')){
                $filename = time() . '_123' . $request->file('image')->extension();
                $request->file('image')->move(public_path('img'), $filename);
                $create->image = $filename;
            }     
            $create->description =$request->description;
 

                $create->save();
            return redirect()->route('admin_package');
    
        } 

        public function package_delete($id)
        {
            //
            $delete= package::where('id',$id)->delete();
            return redirect()->back();
    
    }


    public function package_update($id){
        $update = package::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
        if(is_null($update))
        {
            return redirect()->back()->with('alert',"Please Before Published");
        }
        return view('admin.fronted.package_update',['update'=>$update]);
    }
    
public function package_update_post(Request $request){
    $updater = package::find($request->id);

    // return $request;
    $updater->car_name =$request->car_name;

    
            if ($request->hasFile('image')){
                $filename = time() . '_123' . $request->file('image')->extension();
                $request->file('image')->move(public_path('img'), $filename);
                $updater->image = $filename;
            }     
            $updater->description =$request->description;
 
    $updater->save();
    
    return redirect()->route('admin_package')->with('success', 'Package updated successfully');
}

/**
     * soft active
     */
    public function softpackages_active($id)
    {
        $package = package::where('id',$id)->first();
        if(is_null($package))
        {
            return redirect()->back();
        }
        $package->status = '0';
        $package->save();

        return redirect()->back()->with('error',"UnPublished");
    }

    /**
     * soft unactive
     */
    public function softpackages_unactive($id)
    {
        $package = package::where('id',$id)->first();
        if(is_null($package))
        {
            return redirect()->back();
        }
        $package->status = '1';
        $package->save();

        return redirect()->back()->with('success',"Published");
    }

}
