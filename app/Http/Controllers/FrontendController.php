<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function careers()
    {
        return view('frontend.careers.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

    public function servicesDetails($id)
    {
        return view('frontend.services.details', compact('id'));
    }
}
