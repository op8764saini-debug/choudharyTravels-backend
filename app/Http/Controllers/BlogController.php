<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function admin_blog(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = blog::where('title','LIKE',"%$search%")->orwhere('description','LIKE',"%$search%")->orwhere('date','LIKE',"%$search%")->get();
        }else{
            $data= blog::all();
        }
        
        return view('admin.fronted.blog',['blog_data'=>$data,'search'=>$search]);
    }
    
    public function blog_create(){
        return view('admin.fronted.blog_create');
        }

         
        
    public function blog_create_post(Request $request){
        $create = blog::create();
        $create->title =$request->title;
        $create->description =$request->description;
        $create->date =$request->date;
        

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $create->image = $filename;
        }     

            $create->save();
        return redirect()->route('admin_blog')->with('success','Blogs Created Successfully!');;

    }
    public function blog_delete($id)
    {
        //
        $delete= blog::where('id',$id)->delete();
        return redirect()->back()->with('success','Blog Deleted Successfully!');;

}



public function blog_update($id){
    $update = blog::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
    if(is_null($update))
    {
        return redirect()->back()->with('alert',"Please Before Published");
    }
    return view('admin.fronted.blog_update',['update'=>$update]);
}

public function blog_update_post(Request $request){
$updater = blog::find($request->id);

// return $request;
$updater->title =$request->title;
$updater->description =$request->description;
$updater->date =$request->date;


if ($request->hasFile('image')){
    $filename = time() . '_123' . $request->file('image')->extension();
    $request->file('image')->move(public_path('img'), $filename);
    $updater->image = $filename;
}     

$updater->save();

return redirect()->route('admin_blog')->with('success', 'Blog updated successfully');
}


/**
     * soft active
     */
    public function softblog_active($id)
    {
        $blog = blog::where('id',$id)->first();
        if(is_null($blog))
        {
            return redirect()->back();
        }
        $blog->status = '0';
        $blog->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softblog_unactive($id)
    {
        $blog = blog::where('id',$id)->first();
        if(is_null($blog))
        {
            return redirect()->back();
        }
        $blog->status = '1';
        $blog->save();

        return redirect()->back()->with('success',"Published!");
    }


}
