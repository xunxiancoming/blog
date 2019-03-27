<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $statuses = [];
        if(Auth::check()){
            $statuses = Auth::user()->feed()->paginate(10);
        }
        return view('static_pages.home',compact('statuses'));
    }
    public function help()
    {
        return view('static_pages.help');
    }
    public function about()
    {
        return view('static_pages.about');
    }
}
