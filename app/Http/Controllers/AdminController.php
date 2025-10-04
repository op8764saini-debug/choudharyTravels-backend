<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
 
public function admin_index(){
return view("admin.fronted.index");
}
public function form_element(){
return view('admin.fronted.form_elements');
}

public function lock_screen()
{
    return view('admin.fronted.lock_screen');
}




}
