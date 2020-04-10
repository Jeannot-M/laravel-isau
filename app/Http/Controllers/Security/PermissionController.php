<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;

class PermissionController extends Controller
{
    public function assign()
    {
        return view('security.assign_permission');
    }

    public function assignPermission(Request $request)
    {
        $role = Sentinel::findRoleByName($request->role);

        $page = $request->page;
        $key = $request->key;
        $value = ($request->value == 1) ? true : false;

        $role->removePermission($page . '.' . $key)->save();
        $role->addPermission($page . '.' . $key, $value)->save();

        // $role->permissions = [
        //     $page . '.' . $key => $value
        // ];

        // $role->save();
    }
}
