<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        $service = Service::with('galleries', 'faqs')->findOrFail($id);
        $services = Service::latest()->get();
        return view('frontend.services.details', compact('service', 'services'));
    }
}
