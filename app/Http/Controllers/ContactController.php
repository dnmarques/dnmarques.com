<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ContactRequest;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function contact(Request $request)
    {
        Notification::route('slack', config('services.slack.notifications.channel'))
            ->notify(new ContactRequest(
                $request->input('name'),
                $request->input('email'),
                $request->input('message')
            ));

        return to_route('home');
    }
}
