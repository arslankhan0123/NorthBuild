<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'conName' => 'required|string|max:255',
            'conEmail' => 'required|email|max:255',
            'conPhone' => 'required|string|max:20',
            'conSubject' => 'nullable|string|max:255',
            'conMessage' => 'required|string',
        ]);

        Contact::create([
            'name' => $validated['conName'],
            'email' => $validated['conEmail'],
            'phone' => $validated['conPhone'],
            'subject' => $validated['conSubject'],
            'message' => $validated['conMessage'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
