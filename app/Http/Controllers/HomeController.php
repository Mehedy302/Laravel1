<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if (Auth::user()) {   
    
            return view('home');

        } else {
            return view('error');
        }
    }

    public function landingpage()
    {
        return redirect(route('home'));

    }
}

?>