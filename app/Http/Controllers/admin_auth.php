<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_auth extends Controller
{
    function adminlogin(Request $req){

        $data= $req->input();

        $req->session()->put('user',$data['user']);

        return redirect('dashboard');
    }
}
