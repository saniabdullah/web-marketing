<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {

        return view('signin');
    }

    public function sign_in(Request $request) {
        $adminusername = $request->adminusername;
        $adminpass = $request->adminpass;

        $user = UserAdmin::where('username', $adminusername)->get();

        if ($user->count() == 0) {
            return back()->withErrors(['password' => 'You can\'t access this application!']);
        } else {
            
        }
    }
}
