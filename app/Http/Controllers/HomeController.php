<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    public function index()
    {
        $foodItems = Food::all();
        return view('home',compact('foodItems'));
    }
    public function redirects()
    {
        $userType = Auth::user()->user_type;
        $foodItems = Food::all();
        if($userType=='1')
        {
            return view('admin.admin-home');
        }
        else
        {
            return view('home',compact('foodItems'));
        }  
    }
}
