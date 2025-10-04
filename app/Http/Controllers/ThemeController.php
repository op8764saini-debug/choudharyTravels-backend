<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\blog;
use App\Models\home_form;
use App\Models\package;
use App\Models\service;
use App\Models\slider;
use App\Models\category;
use App\Models\client;
use App\Models\contact_form;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home()
    {
        $data = slider::where('status',1)->get();
        $service_data = service::where('status',1)->get();
        $ab_data = about::where('status',1)->limit(1)->get();
        $pk_data = package::where('status',1)->get();
        $bl_data = blog::where('status',1)->get();
        $cl_data = client::where('status',1)->get();

        return view(
            'user.fronted.index',
            [
                'crousel' => $data,
                'service_data' => $service_data,
                'ab_data' => $ab_data,
                'pk_data' => $pk_data,
                'bl_data' => $bl_data,
                'cl_data' => $cl_data
            ]
        );
    }

    // App\Http\Controllers\ThemeController.php

public function homeApi()
{
    $cr_data = slider::where('status', 1)->get();
    $service_data = service::where('status', 1)->get();
    $ab_data = about::where('status', 1)->limit(1)->get();
    $pk_data = package::where('status', 1)->get();
    $bl_data = blog::where('status', 1)->get();
    $cl_data = client::where('status', 1)->get();

    return response()->json([
        'crousel'      => $cr_data,
        'service_data' => $service_data,
        'ab_data'      => $ab_data,
        'pk_data'      => $pk_data,
        'bl_data'      => $bl_data,
        'cl_data'      => $cl_data,
    ]);
}


    public function index_form_post(Request $request) {
    // Backend validation
    $validated = $request->validate([
        'name' => 'required|string|max:5',
        'email' => 'required|email',
        'datetime' => 'required|date',
        'mobile' => 'required|numeric',
        'persons' => 'required|string',
        'categories' => 'required|string',
        'description' => 'nullable|string'
    ]);

    $create = home_form::create($validated);

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully!',
        'data' => $create
    ]);
}



        public function index_form_postApi(Request $request){
    $create = new home_form();
    $create->name = $request->name;
    $create->email = $request->email;
    $create->datetime = $request->datetime;
    $create->mobile = $request->mobile;
    $create->persons = $request->persons;
    $create->categories = $request->categories;
    $create->description = $request->description;
    $create->save();

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully!'
    ]);
}


//react  header component api

public function categories()
{        $data = category::where('parent_id', 0)
        ->where('status', 1)
        ->limit(3)
        ->get();

    return response()->json($data);
}

//react  header component api
public function subCategories($id)
{   $subcategory = category::where('parent_id', $id)
        ->where('status', 1)
        ->get();

    return response()->json($subcategory);
}




    public function products($id)
    {
        $subcategories = category::where('id', $id)->get();
        
        return view('user.fronted.products', compact('subcategories'));
    }

    //react ke subcategory page per show karane ki api
    public function show_subCategories($id)
    {
        $subcategories = category::where('id', $id)->get();
        
    return response()->json($subcategories);
    }


        public function tour_deals(Request $request)
        {
            $search = $request->input('search', '');
        
            if ($search != "") {
                $tr_deals = home_form::where('name', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->orWhere('mobile', 'LIKE', "%$search%")
                    ->paginate(10); // Ensure results are paginated
            } else {
                $tr_deals = home_form::paginate(10);
            }
        
            return view('admin.fronted.tour_deals', ['tr_deals' => $tr_deals, 'search' => $search]);
        }

        public function tour_deals_delete($id)
        {
            //
            $delete= home_form::where('id',$id)->delete();
            return redirect()->back()->with('success', 'Tour Deals Data Deleted Successfully');
    
    }
    public function tourdeals_thanks()
    {
        return view('user.fronted.tourdeals_thanks');
    }
    

    public function contact_form_post(Request $request){
        $create = contact_form::create();
        $create->name =$request->name;
        $create->email =$request->email;
        $create->subject =$request->subject;
        $create->message =$request->message;
        $create->save();

            return redirect()->route('contact_thanks');
 
    }


    public function contact_form_api(Request $request){
    $create = new contact_form();
    $create->name = $request->name;
    $create->email = $request->email;
    $create->subject = $request->subject;
    $create->message = $request->message;
    $create->save();

    return response()->json([
        'success' => true,
        'message' => 'Contact form submitted successfully'
    ]);
}



    public function contact_details(Request $request){
        $search = $request->input('search','');
        if($search != ''){
            $con_details = contact_form::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->orwhere('subject','LIKE',"%$search%")->paginate(10);
        }else{
            $con_details = contact_form::paginate(10);
        }
        
        return view('admin.fronted.contact_details',['con_details'=>$con_details,'search'=>$search]);
    }

    public function contact_details_delete($id)
    {
        //
        $delete= contact_form::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Contact Data Deleted Successfully');

}

public function contact_thanks()
    {
        return view('user.fronted.contact_thanks');
    }



    public function about()
    {
        $ab_data2 = about::where('status',1)->get();

        return view('user.fronted.about',['ab_data'=>$ab_data2]);
    }

     

     public function aboutApi()
    {
        $ab_data2 = about::where('status',1)->get();

        return response()->json([
            'ab_data'=>$ab_data2,
        ]);

    }
  
    public function packages()
    {
        return view('user.fronted.packages');
    }

    public function blog()
    {
        return view('user.fronted.blog');
    }
    public function contact()
    {
        return view('user.fronted.contact');
    }

    public function services($id){
        $service =  service::where('id',$id)->get();
        return view('user.fronted.services',['service'=>$service]);
    }


     public function show($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        return response()->json($service);
    }


  

    public function blog_details($id)
    {   
        $blog =  blog::where('id',$id)->get();
        return view('user.fronted.blog_details',['blog'=>$blog]);
    }

}
