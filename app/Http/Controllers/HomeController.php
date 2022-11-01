<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Employees;

class HomeController extends Controller
{
    public function home_page()
    {
        return view('home-page');
    }
    public function user_add(Request $request)
    {
       $employees = new Employees();
        
    }

}
