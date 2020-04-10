<?php

namespace App\Http\Controllers\Security;

use Sentinel;
use Validator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login()
    {
        if(Sentinel::check()) {
            return redirect(url('/'));
        }
        return view('security.login');
    }

    public function postLogin(Request $request)
    {
        // Sentinel::disableCheckpoints();
        $errorMsgs = [
            'email.required' => 'Entrer l\'email',
            'email.email' => 'Email doit etre valide',
            'password.required' => 'Entrer le mot de passe'

        ];
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ], $errorMsgs);

        if($validator->fails())
        {
            $returnData = array(
                'status' => 'error',
                'message' => 'Tous les champs SVP',
                'errors' => $validator->errors()->all()
            );

            // return response()->json($returnData, 500);
            return redirect()->back()->with(['error' => $validator->errors()->all()]);
        }

        if($request->remember == 'on'){

            try {
                $user = Sentinel::authenticateAndRemember($request->all());

            } catch (ThrottlingException $e) {
                
                $delay = $e->getDelay();
                $returnData = array(
                    'status' => 'error',
                    'message' => 'Tous les champs SVP',
                    'errors' => ["Vous etes bannis pour $delay secondes"]
                );

            // return response()->json($returnData, 500);
            return redirect()->back()->with(['error' => "Vous etes bannis pour $delay secondes"]);

                
            }catch (NotActivatedException $e) {
                $returnData = array(
                    'status' => 'error',
                    'message' => 'Tous les champs SVP',
                    'errors' => ["Votre compte n'est pas activer."]
                );

            //   return response()->json($returnData, 500);
            return redirect()->back()->with(['error' => "Votre compte n'est pas activer."]);


            }
        } else {
            
            try {
                $user = Sentinel::authenticate($request->all());

            } catch (ThrottlingException $e) {
                
                $delay = $e->getDelay();
                $returnData = array(
                    'status' => 'error',
                    'message' => 'Tous les champs SVP',
                    'errors' => ["Vous etes bannis pour $delay secondes"]
                );

            // return response()->json($returnData, 500);
            return redirect()->back()->with(['error' => "Vous etes bannis pour $delay secondes"]);

                
            }catch (NotActivatedException $e) {
                $returnData = array(
                    'status' => 'error',
                    'message' => 'Tous les champs SVP',
                    'errors' => ["Votre compte n\'est pas activer."]
                );

            //   return response()->json($returnData, 500);
            return redirect()->back()->with(['error' => "Votre compte n'est pas activer."]);

            }

        }

        if (Sentinel::check()) {
            return redirect(url('/'));
        }else {
            $returnData = array(
                'status' => 'error',
                'message' => 'Please review',
                'errors' => ["Email or Password mismatch."]
            );

        //   return response()->json($returnData, 500);
        return redirect()->back()->with(['error' => "Email or Password mismatch."]);

        }
    }

    public function postLogout()
    {
        Sentinel::logout();
        return redirect(url('/login'));
    }
    
}
