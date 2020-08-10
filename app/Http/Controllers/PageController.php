<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        return view('home');
    }

    public function product(){
        return view('SingleProduct');
    }

    public function checkout(){
        $items= session('items', []);
        //$items=$items_session[0];
        //dd($items);
        return view('checkout',compact('items'));
    }
}
