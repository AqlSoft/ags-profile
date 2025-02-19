<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
            'name' => 'nullable|string|max:255'
        ], [
            'email.required' => __('validation.required', ['attribute' => __('home.newsletter_email_placeholder')]),
            'email.email' => __('validation.email', ['attribute' => __('home.newsletter_email_placeholder')]),
            'email.unique' => __('home.newsletter_email_already_subscribed')
        ]);

        try {
            $subscriber = NewsletterSubscriber::create([
                'email' => $validated['email'],
                'name' => $validated['name'] ?? null,
                'verification_token' => Str::random(32)
            ]);

            // TODO: إرسال بريد التحقق

            return redirect()
                ->route('home', '#newsletter')
                ->with('success', __('home.newsletter_subscription_success'));
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', __('home.newsletter_subscription_error'))
                ->withInput();
        }
    }
}
