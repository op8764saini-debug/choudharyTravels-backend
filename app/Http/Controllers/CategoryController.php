<?php

namespace App\Http\Controllers;


use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    

    public function admin_category(Request $request){
        $search = $request['search'] ?? ""; 

        if ($search != "") {
            $data = category::where('parent_id', 0)
                ->where(function($query) use ($search) {
                    $query->where('title', 'LIKE', "%$search%")
                          ->orWhere('description', 'LIKE', "%$search%")
                          ->orWhere('short_description', 'LIKE', "%$search%");
                })
                ->get();
        } else {
            $data = category::where('parent_id', 0)->get();
        }

        
    return view('admin.fronted.category',['s_da'=>$data,'search'=>$search]);
    }
    public function category_create(){
    return view('admin.fronted.category_create');
    }
     
    public function category_create_post(Request $request){
        $create = category::create();
        $create->title =$request->title;
        $create->description =$request->description;
        $create->short_description =$request->short_description;

        if ($request->hasFile('image')){
            $filename = time() . '_123' . $request->file('image')->extension();
            $request->file('image')->move(public_path('img'), $filename);
            $create->image = $filename;
        }     
            $create->save();
        return redirect()->route('admin_category');

    }
    public function category_delete($id)
    {
        //
        $delete= category::where('id',$id)->delete();
        return redirect()->back();


    }
    public function category_update($id){
        $update = category::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
        if(is_null($update))
        {
            return redirect()->back()->with('alert',"Please Before Published");
        }
        return view('admin.fronted.category_update',['update'=>$update]);
    }
    
public function category_update_post(Request $request){
    $updater = category::find($request->id);

    // return $request;
    $updater->title =$request->title;
        $updater->description =$request->description;
        $updater->short_description =$request->short_description;

    if ($request->hasFile('image')) {
        $filename = time() . '_123.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('img'), $filename);
        $updater->image = $filename;
    }

    $updater->save();
    
    return redirect()->route('admin_category')->with('success', 'category updated successfully');
}


/**
     * soft active
     */
    public function softcategory_active($id)
    {
        $category = category::where('id',$id)->first();
        if(is_null($category))
        {
            return redirect()->back();
        }
        $category->status = '0';
        $category->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softcategory_unactive($id)
    {
        $category = category::where('id',$id)->first();
        if(is_null($category))
        {
            return redirect()->back();
        }
        $category->status = '1';
        $category->save();

        return redirect()->back()->with('success',"Published!");
    }



public function sub_category_product(Request $request , $id)
{
    $search = $request['search'] ?? "";

        if ($search != "") {
            $subcategory = category::where('parent_id', $id)->with('parent')
                ->where(function($query) use ($search) {
                    $query->where('title', 'LIKE', "%$search%")
                          ->orWhere('description', 'LIKE', "%$search%")
                          ->orWhere('short_description', 'LIKE', "%$search%");
                })
                ->get();
        } else {
            $subcategory = category::where('parent_id', $id)->with('parent')->get();
        }

    return view('admin.fronted.sub_category_product', compact('subcategory','search'));
}

public function sub_category_create($id)
{
    // `$id` को आप यहाँ प्रोसेस कर सकते हैं या व्यू में भेज सकते हैं
    return view('admin.fronted.sub_category_create', compact('id'));
}


public function sub_category_post(Request $request){
    $request->validate([
        'parent_id' => 'required|integer',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string',
        'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    $create = category::create();
    //    return $request;
    $create->parent_id =$request->parent_id;
    $create->title =$request->title;


    if ($request->hasFile('image')) {
        if ($create->image && file_exists(public_path('img/' . $create->image))) {
            unlink(public_path('img/' . $create->image));
        }
        $filenameere = uniqid() . '_123.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filenameere);
        $create->image = $filenameere;
    }
    
    if ($request->hasFile('banner_image')) {
        if ($create->banner_image && file_exists(public_path('img/' . $create->banner_image))) {
            unlink(public_path('img/' . $create->banner_image));
        }
        $filename2 = uniqid() . '_123.' . $request->file('banner_image')->extension();
        $request->file('banner_image')->move(public_path('img'), $filename2);
        $create->banner_image = $filename2;
    }

    $existingImages = json_decode($create->multiple_image) ?? []; // पुरानी इमेजेस लोड करें
    
        if ($request->hasFile('multiple_image')) {
            foreach ($request->file('multiple_image') as $key => $image) {
                // नई इमेज का नाम जनरेट करें
                $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
    
                // नई इमेज को 'images' फोल्डर में सेव करें
                $image->move(public_path('images'), $imageName);
    
                // नई इमेज को ऐरे में जोड़ें
                $existingImages[] = $imageName;
            }
        }
    
        // पुरानी इमेजेस + नई इमेजेस को सेव करें
        $create->multiple_image = json_encode($existingImages);


    
    $create->description =$request->description;
    $create->short_description =$request->short_description;


   
     
    $create->save();

     
return redirect()->route('sub_category_product', ['id' => $request->parent_id]);


}


public function sub_category_product_delete($id)
    {
        //
        $delete= category::where('id',$id)->delete();
        return redirect()->back();
    }





    public function sub_category_update($id)
{
    // $subv = category::where('parent_id', $id)->first();
    $subv = category::where('status',1)->find($id); // Find is a shorthand for where('id', $id)->first()
    if(is_null($subv))
    {
        return redirect()->back()->with('alert',"Please Before Published");
    }

    return view('admin.fronted.sub_category_update',['subcat'=> $subv]);
}



public function sub_category_product_update_post(Request $request)
{
    $updater = Category::find($request->id);

    $updater->parent_id = $request->parent_id;
    $updater->title = $request->title;

    if ($request->hasFile('image')) {
        if ($updater->image && file_exists(public_path('img/' . $updater->image))) {
            unlink(public_path('img/' . $updater->image));
        }
        $filenameere = uniqid() . '_123.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('img'), $filenameere);
        $updater->image = $filenameere;
    }
    
    if ($request->hasFile('banner_image')) {
        if ($updater->banner_image && file_exists(public_path('img/' . $updater->banner_image))) {
            unlink(public_path('img/' . $updater->banner_image));
        }
        $filename2 = uniqid() . '_123.' . $request->file('banner_image')->extension();
        $request->file('banner_image')->move(public_path('img'), $filename2);
        $updater->banner_image = $filename2;
    }

    $existingImages = json_decode($updater->multiple_image) ?? []; // पुरानी इमेजेस लोड करें
    
        if ($request->hasFile('multiple_image')) {
            foreach ($request->file('multiple_image') as $key => $image) {
                // नई इमेज का नाम जनरेट करें
                $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
    
                // नई इमेज को 'images' फोल्डर में सेव करें
                $image->move(public_path('images'), $imageName);
    
                // नई इमेज को ऐरे में जोड़ें
                $existingImages[] = $imageName;
            }
        }
    
        // पुरानी इमेजेस + नई इमेजेस को सेव करें
        $updater->multiple_image = json_encode($existingImages);

    $updater->description = $request->description;
    $updater->short_description = $request->short_description;

   
    $updater->save();

    return redirect()->route('sub_category_product', ['id' => $request->parent_id])
        ->with('success', 'Sub-category updated successfully!');
}



public function deleteImage($id, $key)
{
    // ब्लॉग को फाइंड करें
    $category = Category::find($id);

    if ($category) {
        $images = json_decode($category->multiple_image); // JSON इमेजेस को डिकोड करें

        // इमेज को ऐरे से हटाएं
        if (isset($images[$key])) {
            $imagePath = public_path('images/' . $images[$key]); // इमेज का पाथ
            
            // फाइल सिस्टम से इमेज डिलीट करें
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // ऐरे से इमेज हटाएं और अपडेट करें
            unset($images[$key]);
            $category->multiple_image = json_encode(array_values($images)); // री-इंडेक्स करें
            $category->save();

            return redirect()->back()->with('success', 'Image deleted successfully!');
        }
    }

    return redirect()->back()->with('error', 'Failed to delete image!');
}



/**
     * soft active
     */
    public function softsubcategory_active($id)
    {
        $subcategory = category::where('id',$id)->first();
        if(is_null($subcategory))
        {
            return redirect()->back();
        }
        $subcategory->status = '0';
        $subcategory->save();

        return redirect()->back()->with('error',"UnPublished!");
    }

    /**
     * soft unactive
     */
    public function softsubcategory_unactive($id)
    {
        $subcategory = category::where('id',$id)->first();
        if(is_null($subcategory))
        {
            return redirect()->back();
        }
        $subcategory->status = '1';
        $subcategory->save();

        return redirect()->back()->with('success',"Published!");
    }





}
