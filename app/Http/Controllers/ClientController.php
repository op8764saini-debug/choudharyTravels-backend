<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    //

    public function client(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $read = client::where('name','LIKE',"%$search%")->orwhere('description','LIKE',"%$search%")->orwhere('designation','LIKE',"%$search%")->get();
        }else{
            $read = client::all();
        }
        
        return view('admin.fronted.client',['c_read'=>$read,'search'=>$search]);
    }
    public function client_create(){
        return view('admin.fronted.client_create');
    }
    public function client_create_post(Request $request){
        $create = client::create();
        $create->name = $request->name;
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        // $imageName = time().'.Client'.$request->image->extension();  
        // $request->image->move(public_path('img'), $imageName);
        // $create->image = $imageName;

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $create->image = $filename;
        }     
        
        $create->designation = $request->designation;

        $create->description = $request->description;
        $create->save();
        return redirect()->route('client')->with('success','Client Created Successfully!');
          
    }

    public function client_delete($id){
        $delete = client::where('id',$id)->delete();
        return redirect()->back()->with('success','Client Deleted Successfully!');;
    }

    public function client_update($id){
        $update_form = client::where('status',1)->where('id',$id)->first();
        if(is_null($update_form))
        {
            return redirect()->back()->with('alert',"Please Before Published");
        }
        // athva
        // $update_form = client::find($id);
        return view('admin.fronted.client_update',['upd'=> $update_form]);

    }

    public function client_update_post(Request $request){
        $update = client::where('id',$request->id)->first();
        // athava
        // $update = client::find($request->id);

        $update->name = $request->name;
        // $request->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);
        // $imageName = time().'.Client'.$request->image->extension();  
        // $request->image->move(public_path('img'), $imageName);
        // $update->image = $imageName;

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $update->image = $filename;
        }     
        
        $update->designation = $request->designation;
        $update->description = $request->description;

        $update->save();
        return redirect()->route('client')->with('success','Client Updated Successfully!');;




    }


    /**
     * soft active
     */
    public function softclient_active($id)
    {
        $client = client::where('id',$id)->first();
        if(is_null($client))
        {
            return redirect()->back();
        }
        $client->status = '0';
        $client->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softclient_unactive($id)
    {
        $client = client::where('id',$id)->first();
        if(is_null($client))
        {
            return redirect()->back();
        }
        $client->status = '1';
        $client->save();

        return redirect()->back()->with('success',"Published!");
    }
}
