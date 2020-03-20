<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $title = 'DASHBOARD';
        return view('pages.dashboard')->with('title', $title);
    }

    public function index(){
        $title = 'Welcome Coffee Project';
        return view('pages.index')->with('title', $title);
    }
    
    public function about(){
        $title = 'ABOUT Us';
        return view('pages.about')-> with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => ' SERVICE',
            'services' => ['Web Design','POS','Programing']
        ); 

        return view('pages.services')-> with($data);
    }
    public function order()
    {
        $title = 'Create Order';
        return view('pages.order')->with('title', $title);
    }
}
