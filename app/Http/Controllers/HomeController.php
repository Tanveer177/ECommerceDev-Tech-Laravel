<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home.userpage');
    }

    public function view_about(){
        return view('home.about');
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype =='1')
        {
            return view('admin.home');

        }
        else
        {
            return view('home.userpage');
        }
    }
    
    public function addToCart()
    {
        if (auth()->check()) {
    
            return view('home.cart');
        } else {
        
            return redirect()->route('login')->with('error', 'Please log in to add to cart.');
        }
        // return view('home.cart');

    }


}
