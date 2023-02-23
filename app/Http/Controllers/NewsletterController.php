<?php

namespace App\Http\Controllers;

use App\services\MailchimpNewsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter)
    {
        request()->validate(
            ['email' => 'required', 'email']
        );

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email' => 'This email could not be added.']);
        }

        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
