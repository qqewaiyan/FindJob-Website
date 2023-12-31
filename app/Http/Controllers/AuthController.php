<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //register page for user
    public function registerUser(){
        return view("auth.registerUser");
    }

    //register page for company

    public function registerCompany(){
        return view("auth.registerCompany");
    }


    //after login or register
    public function dashboard(){
        if(Auth::user()->role == "admin"){
            return redirect()->route("admins.index");
        }
        if(Auth::user()->role == "user"){
           return redirect()->route("users.index");
        }
        if(Auth::user()->role == "company"){
            return view("company.homePage");
        }
    }
}
