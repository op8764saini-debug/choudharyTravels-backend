<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function slider(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = slider::where('name','LIKE',"%$search%")->get();
        }else{
            $data = slider::all();
        }
        
    return view('admin.fronted.slider',['read_cr'=>$data,'search'=>$search]);
    }

 
    /**
     * Show the form for creating a new resource.
     */
    public function slider_post(Request $request)
    {
        
       $create = slider::create();
       $create->name = $request->name;
 
       if ($request->hasFile('image')){
        $filename = time() . '_123' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filename);
        $create->image = $filename;
    }     
        $create->save();
    return redirect()->route('slider')->with('addslider', ' New Slider Data Added successfully');
    }

    public function slider_delete($id)
    {
        //
        $delete= slider::where('id',$id)->delete();
        return redirect()->back()->with('delete', 'Slider Data Deleted successfully');


    }


    public function slider_update_post(Request $request)
    {
        
        $update = slider::find($request->id);
        $update->name = $request->name;
 
       if ($request->hasFile('image')){
        $filename = time() . '_123' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filename);
        $update->image = $filename;
    }     
        $update->save();
    return redirect()->route('slider')->with('addslider', ' New Data Update successfully');
    }


    /**
     * soft active
     */
    public function softslider_active($id)
    {
        $slider = slider::where('id',$id)->first();
        if(is_null($slider))
        {
            return redirect()->back();
        }
        $slider->status = '0';
        $slider->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softslider_unactive($id)
    {
        $slider = slider::where('id',$id)->first();
        if(is_null($slider))
        {
            return redirect()->back();
        }
        $slider->status = '1';
        $slider->save();

        return redirect()->back()->with('success',"Published!");
    }
    
}
