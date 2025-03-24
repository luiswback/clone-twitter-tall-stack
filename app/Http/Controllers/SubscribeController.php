<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function __invoke()
    {
        /**
         * @var User $user
         */
        $user = auth()->user();
        $user->createOrGetStripeCustomer();

        return $user->newSubscription('default', 'price_1R5ruNHShKEuhJF1A6zaTb8r')
            ->checkout()
            ->redirect();
    }
}
