<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

     public function authenticate(Request $request){
   $validator = Validator::make($request->all(),[
    'email' => 'required|email',
    'password' => 'required'
   ]);
   if($validator->passes()){

       if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

        if(Auth::guard('admin')->user()->role != "admin"){
          Auth::guard('admin')->logout();  
        return redirect()->route('admin.login')->with('error','You are not authorized to access this page.');

        }
        return redirect()->route('admin_index');

   
}else{
        return redirect()->route('admin.login')->with('error','email or password is incorrect.');
    }
    



   }else{
    return redirect()->route('admin.login')
    ->withInput() // email ki value error aane per clear na ho iske liya use hota ha.
    ->withErrors($validator);
   }
    }
    
    public function logout(){
    Auth::guard('admin')->logout();
     return redirect()->route('admin.login');
}

}
