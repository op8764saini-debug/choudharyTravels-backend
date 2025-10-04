<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function admin_services(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $data = service::where('travel_name','LIKE',"%$search%")->orwhere('description','LIKE',"$search")->orwhere('short_description','LIKE',"%$search")->get();
        }else{
            $data = service::all();
        }
        
    return view('admin.fronted.service',['s_da'=>$data,'search'=>$search]);
    }
    public function service_create(){
    return view('admin.fronted.services_create');
    }
     
    public function service_create_post(Request $request){
        $create = service::create();

        // return $request;
        $create->travel_name =$request->travel_name;
        $create->price =$request->price;

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $create->image = $filename;
        }     

        $create->description =$request->description;
        $create->short_description =$request->short_description;
       
        if ($request->hasFile('banner_image')){
            $filename = time() . '_123' . $request->file('banner_image')->extension();
            $request->file('banner_image')->move(public_path('img'), $filename);
            $create->banner_image = $filename;
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
        return redirect()->route('admin_services')->with('success','Service Create Successfully!');

    }
    public function service_delete($id)
    {
        //
        $delete= service::where('id',$id)->delete();
        return redirect()->back()->with('success','Service Delete Successfully!');


    }
    public function service_update($id){
        $update = Service::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
        if(is_null($update))
        {
            return redirect()->back()->with('alert',"Please Before Published");
        }
        return view('admin.fronted.service_update',['update'=>$update]);
    }
    
public function service_update_post(Request $request){
    $updater = Service::find($request->id);

    // return $request;
    $updater->travel_name =$request->travel_name;
    $updater->price =$request->price;

    if ($request->hasFile('image')){
        $filename = time() . '_123' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filename);
        $updater->image = $filename;
    }     

    $updater->description =$request->description;
    $updater->short_description =$request->short_description;
   
    if ($request->hasFile('banner_image')){
        $filename = time() . '_123' . $request->file('banner_image')->extension();
        $request->file('banner_image')->move(public_path('img'), $filename);
        $updater->banner_image = $filename;
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
    
    return redirect()->route('admin_services')->with('success', 'Service Updated Successfully');
}


public function deleteserviceImage($id, $key)
{
    // ब्लॉग को फाइंड करें
    $service = Service::find($id);

    if ($service) {
        $images = json_decode($service->multiple_image); // JSON इमेजेस को डिकोड करें

        // इमेज को ऐरे से हटाएं
        if (isset($images[$key])) {
            $imagePath = public_path('images/' . $images[$key]); // इमेज का पाथ
            
            // फाइल सिस्टम से इमेज डिलीट करें
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // ऐरे से इमेज हटाएं और अपडेट करें
            unset($images[$key]);
            $service->multiple_image = json_encode(array_values($images)); // री-इंडेक्स करें
            $service->save();

            return redirect()->back()->with('success', 'Image deleted successfully!');
        }
    }

    return redirect()->back()->with('error', 'Failed to delete image!');
}


/**
     * soft active
     */
    public function softservice_active($id)
    {
        $service = Service::where('id',$id)->first();
        if(is_null($service))
        {
            return redirect()->back();
        }
        $service->status = '0';
        $service->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softservice_unactive($id)
    {
        $service = Service::where('id',$id)->first();
        if(is_null($service))
        {
            return redirect()->back();
        }
        $service->status = '1';
        $service->save();

        return redirect()->back()->with('success',"Published!");
    }


 
  
}
