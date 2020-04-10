<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;

class FormController extends Controller
{
    public function form()
    {
        $user = Sentinel::getUser();
        return view('form.xyzform', compact('user'));
    }
}
