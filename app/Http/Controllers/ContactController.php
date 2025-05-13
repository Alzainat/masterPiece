<?php

namespace App\Http\Controllers;

use App\Models\MessageForContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a new contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
        
        // Save to database
        MessageForContact::create($validated);
        
        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}