<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //

    public function index(){
    return view('login');
    }

    public function authenticate(Request $request){
   $validator = Validator::make($request->all(),[
    'email' => 'required|email',
    'password' => 'required'
   ]);

   if($validator->passes()){
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
          return redirect()->route('home');
      }else{
        return redirect()->route('account.login')->with('error','email or password is incorrect.');
    }
    

   }else{
    return redirect()->route('account.login')
    ->withInput() // email ki value error aane per clear na ho 
    ->withErrors($validator);
   }
    }


    //react login api
    //react login api
    //react login api

    public function loginApi(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::user();

        // ✅ Check role
        if ($user->role !== 'customer') {
            Auth::logout(); // safety ke liye logout
            return response()->json([
                'status' => false,
                'message' => 'Only customers are allowed to login.'
            ], 403);
        }

        // ✅ Agar customer hai to token do
        $token = $user->createToken("auth_token")->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user
        ]);
    } else {
        return response()->json([
            'status' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }
}



public function register()  {
     return view('register');
}

public function processRegister(Request $request){
  
      $validator = Validator::make($request->all(),[
    'email' => 'required|email|unique:users',
    'password' => 'required|confirmed',
    'password_confirmation' => 'required',
    'name' => 'required'
   ]);
   if($validator->passes()){
    
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = 'customer';
    $user->save();
      return redirect()->route('account.login')->with('success','you have registerd successfully.');


   }else{
    return redirect()->route('account.register')
    ->withInput() // email ki value error aane per clear na ho 
    ->withErrors($validator);
   }
}

//react register api
//react register api
//react register api
public function processRegisterApi(Request $request){
    $validator = Validator::make($request->all(),[
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'name' => 'required'
    ]);

    if($validator->fails()){
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = 'customer';
    $user->save();

    return response()->json([
        'status' => true,
        'message' => 'You have registered successfully.',
        'user' => $user
    ], 201);
}

//react api
//react api
public function profile(Request $request)
{
    return response()->json([
        'status' => true,
        'user' => $request->user()
    ]);
}

// react logout api
// react logout api

public function logoutApi(Request $request)
{

    // Current user ke sab tokens delete kar do
    $request->user()->tokens()->delete();

    return response()->json([
        'status' => true,
        'message' => 'Logged out successfully'
    ]);
}


public function logout(){
    Auth::logout();
     return redirect()->route('account.login');
}






}


