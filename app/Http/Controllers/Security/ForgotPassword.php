<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;
use Reminder;
use App\User;
use Mail;

class ForgotPassword extends Controller
{
    public function forgot()
    {
        return view('security.forgot');
    }

    public function password(Request $request )
    {
        $user = User::whereEmail($request->email)->first();
        if ($user == null) {
            return redirect()->back()->with(['error' => 'Email n\'existe pas']);
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Email envoyer avec succès. Verifier dans votre messagerie']);
    }

    public function sendEmail($user, $code)
    {
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function($message) use ($user) {
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    }

    public function reset($email, $code)
    {
        $user = User::whereEmail($email)->first();
        if ($user == null) {
            echo 'Email n\'existe pas';
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user);

        if($reminder){
            if ($code == $reminder->code) {
                return view('security.reset')->with(['user' => $user, 'code' => $code]);
            }else {
                return redirect('/');
            }
        }else {
            echo 'Temps est déjà depassé';
        }
    }

    public function resetPassword(Request $request, $email, $code)
    {
        $this->validate($request, [
            'password' => 'required|min:7|max:12|confirmed',
            'password_confirmation' => 'required|min:7|max:12'
        ]);

        $user = User::whereEmail($email)->first();

        if ($user == null) {
            echo 'Email n\'existe pas';
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user);


        if($reminder){
            if ($code == $reminder->code) {
                Reminder::complete($user, $code, $request->password);
                return redirect(url('/login'))->with('success', 'Mot de passe changer avec succès. Connectez-vous avec le nouveau');
            }else {
                return redirect('/');
            }
        }else {
            echo 'Temps est déjà depassé';
        }

    }
}
