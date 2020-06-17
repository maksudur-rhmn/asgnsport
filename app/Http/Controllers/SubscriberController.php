<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionMailer;
use Carbon\Carbon;
use App\Subscriber;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class SubscriberController extends Controller
{
    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns'
        ]);

        
        Subscriber::insert($request->except('_token') + ['created_at' => Carbon::now()]);
        Mail::to($request->email)->send(new SubscriptionMailer());
        // return back()->withSuccess('Thank you for Subscribing with us');
        $url = URL::route('home') . '#footer';
        return Redirect::to($url)->withSuccess('Thank you for subscribing with us');
    }
}
