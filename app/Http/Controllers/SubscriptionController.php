<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function checkout(Request $request, $planId)
    {
        return $request->user()
            ->newSubscription('default', $planId)
            ->checkout([
                'success_url' => route('filament.app.pages.subscription'),
                'cancel_url' => route('filament.app.pages.subscription'),
            ]);
    }
}
