<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'message' => 'required|string',
        ]);

        Mail::to(config('mail.from.address', 'info@sepreninsurance.com'))
            ->send(new ContactFormMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
