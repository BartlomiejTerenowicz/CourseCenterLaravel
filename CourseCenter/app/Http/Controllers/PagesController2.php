<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController2 extends Controller
{
    //
    public function contact()
    {
        $header = "To jest kontakt3";
        return View('pages.contact')->with('header',$header);
    }

    public function about()
    {
        $var1 = 12;
        $var2 = "Test";
        $var3 = 12.34;
        return view('pages.about',compact('var1','var2','var3'));
    }
}
