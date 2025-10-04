<?php

namespace App\Http\Controllers;

use App\Models\tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //

    public function admin_tour(){
        $tr= tour::all();
    return view('admin.fronted.tour',['tr_data'=>$tr]);
    }

       public function tour_create(){
        return view('admin.fronted.tour_create');
        }
        public function tour_create_post(Request $request){
            $create = tour::create();
            $create->title =$request->title;
 
                if ($request->hasFile('image')){
                $filename = time() . '_123' . $request->file('image')->extension();
                $request->file('image')->move(public_path('img'), $filename);
                $create->image = $filename;
            }     
                $create->save();

               
                // return redirect()->route('admin_tour')->with('success_form', 'new tour data created successfully');
     
        }
       
    public function tour_delete($id)
    {
        //
        $delete= tour::where('id',$id)->delete();
        return redirect()->back()->with('success_delete', 'tour data deleted successfully');

}

public function tour_update($id){
    $update = tour::find($id); // Find is a shorthand for where('id', $id)->first()
    return view('admin.fronted.tour_update',['update'=>$update]);
}



public function tour_update_post(Request $request){
    $updater = tour::find($request->id);
    
    // return $request;
    $updater->title =$request->title;

    
    if ($request->hasFile('image')){
        $filename = time() . '_123' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filename);
        $updater->image = $filename;
    }     
    
    $updater->save();

    return redirect()->route('admin_tour')->with('success', 'tour data updated successfully');
    }
    
    
    
}
