<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{ 
    //
    public function admin_about(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = about::where('title','LIKE',"%$search%")->orwhere('description','LIKE',"%$search%")->orwhere('short_description','LIKE',"%$search%")->get();
        }else{
            $data= about::all();
        }
        return view('admin.fronted.about',['ab_data'=>$data,'search'=>$search]);
    }

    public function about_create(){
        return view('admin.fronted.about_create');
        }
        
    public function about_create_post(Request $request){
        $create = about::create();
        $create->title =$request->title;
        $create->description =$request->description;
        $create->description2   =$request->description2;
        $create->short_description =$request->short_description;

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $create->image = $filename;
        }     

        if ($request->hasFile('multiple_image')) {
            $images = []; // Initialize an array to store image names
        
            foreach ($request->file('multiple_image') as $key => $image) {
                // Generate a unique name for each image
                $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
        
                // Move the image to the 'images' folder in the 'public' directory
                $image->move(public_path('img'), $imageName);
        
                // Add the image name to the array
                $images[] = $imageName;
            }
        
            // Now, $images contains the names of all uploaded images
            // You can save this array to your database as JSON if needed
        }
        $create->multiple_image = json_encode($images);
            $create->save();
        return redirect()->route('admin_about')->with('success','About created successfully');
 
    }

    public function about_delete($id)
    {
        //
        $delete= about::where('id',$id)->delete();
        return redirect()->back();

}





public function about_update($id){
    $update = about::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
    if(is_null($update))
    {
        return redirect()->back()->with('alert',"Please Before Published");
    }
    return view('admin.fronted.about_update',['update'=>$update]);
}

public function about_update_post(Request $request){
$updater = about::find($request->id);

// return $request;
$updater->title =$request->title;
$updater->description =$request->description;
$updater->description2   =$request->description2;

$updater->short_description =$request->short_description;

if ($request->hasFile('image')){
    $filename = time() . '_123' . $request->file('image')->extension();
    $request->file('image')->move(public_path('img'), $filename);
    $updater->image = $filename;
}     

$existingImages = json_decode($updater->multiple_image) ?? []; // पुरानी इमेजेस लोड करें
    
        if ($request->hasFile('multiple_image')) {
            foreach ($request->file('multiple_image') as $key => $image) {
                // नई इमेज का नाम जनरेट करें
                $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
    
                // नई इमेज को 'images' फोल्डर में सेव करें
                $image->move(public_path('img'), $imageName);
    
                // नई इमेज को ऐरे में जोड़ें
                $existingImages[] = $imageName;
            }
        }
    
        // पुरानी इमेजेस + नई इमेजेस को सेव करें
        $updater->multiple_image = json_encode($existingImages);

$updater->save();

return redirect()->route('admin_about')->with('success', 'about updated successfully');
}


public function deleteaboutImage($id, $key)
{
    // ब्लॉग को फाइंड करें
    $about = about::find($id);

    if ($about) {
        $images = json_decode($about->multiple_image); // JSON इमेजेस को डिकोड करें

        // इमेज को ऐरे से हटाएं
        if (isset($images[$key])) {
            $imagePath = public_path('images/' . $images[$key]); // इमेज का पाथ
            
            // फाइल सिस्टम से इमेज डिलीट करें
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // ऐरे से इमेज हटाएं और अपडेट करें
            unset($images[$key]);
            $about->multiple_image = json_encode(array_values($images)); // री-इंडेक्स करें
            $about->save();

            return redirect()->back()->with('success', 'Image deleted successfully!');
        }
    }

    return redirect()->back()->with('error', 'Failed to delete image!');
}


/**
     * soft active
     */
    public function softabout_active($id)
    {
        $about = about::where('id',$id)->first();
        if(is_null($about))
        {
            return redirect()->back();
        }
        $about->status = '0';
        $about->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softabout_unactive($id)
    {
        $about = about::where('id',$id)->first();
        if(is_null($about))
        {
            return redirect()->back();
        }
        $about->status = '1';
        $about->save();

        return redirect()->back()->with('success',"Published!");
    }




}
