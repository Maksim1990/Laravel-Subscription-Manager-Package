<?php

namespace MaksimN\SubscriptionManager\Http\Controllers;

use Illuminate\Http\Request;
use MaksimN\SubscriptionManager\Services\SubscriptionManager;

class SubscriptionManagerController
{
    public function __construct(private SubscriptionManager $subscriptionManager)
    {
    }

    public function dashboard(){
        $message = 'Welcome To Subscription Manager Dashboard!';
        return view('subscription-manager::dashboard', compact('message'));
    }

    public function subscribe(Request $request){
        $this->subscriptionManager->subscribe($request->all());
        return response()->json(
            ['message'=> sprintf('User with email %s is successfully subscribed.', $request->email)]
        );
    }

    public function unsubscribe(Request $request){
        $this->subscriptionManager->unsubscribe($request->all());
        return response()->json(
            ['message'=> sprintf('User with email %s is unsubscribed.', $request->email)]
        );
    }
}
