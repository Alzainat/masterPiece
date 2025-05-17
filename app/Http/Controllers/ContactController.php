<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a newly created contact message in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^\+?\d{10,15}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        // Create new contact message
        ContactMessage::create($validated);
        
        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}