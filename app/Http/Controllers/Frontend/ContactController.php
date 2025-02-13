<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to(config('mail.from.address'))->send(new ContactForm($validated));

        return back()->with('success', __('messages.message_sent'));
    }

    public function displayMessages()
    {
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }
}
