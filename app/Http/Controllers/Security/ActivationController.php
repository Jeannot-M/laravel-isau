<?php

namespace App\Http\Controllers\Security;

use Sentinel;
use Activation;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate($email, $code)
    {
        $user = User::whereEmail($email)->first();
        $user = Sentinel::findByID($user->id);

        if (Activation::complete($user, $code)) {
            return redirect('/login');
        }
    }
}
