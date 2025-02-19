<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Models\Message;
use App\Models\ContactMessage;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000'
        ], [
            'name.required' => __('validation.required', ['attribute' => __('home.contact_us_form_name_placeholder')]),
            'email.required' => __('validation.required', ['attribute' => __('home.contact_us_form_email_placeholder')]),
            'email.email' => __('validation.email', ['attribute' => __('home.contact_us_form_email_placeholder')]),
            'subject.required' => __('validation.required', ['attribute' => __('home.contact_us_form_subject_placeholder')]),
            'message.required' => __('validation.required', ['attribute' => __('home.contact_us_form_message_placeholder')])
        ]);

        try {
            ContactMessage::create($validated);
            
            return redirect()
                ->route('home', '#contact')
                ->with('success', __('home.contact_us_form_success_message'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', __('home.contact_us_form_error_message'))
                ->withInput();
        }
    }

    public function displayMessages()
    {
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }
}
