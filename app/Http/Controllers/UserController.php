<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    public function index() {
        return View::make('admin.index');
    }

    public function edit($id) {
        $users = User::find($id);

        return View::make('auth.passwords.reset')
            ->with('users', $users);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'password' =>'required|confirmed',
        ]);

        if ($validator->fails()) {
	        return redirect('user/' .Auth::user()->id . '/edit')
	            ->withInput()
	            ->withErrors($validator);
	    }
        $user = User::find(Auth::user()->id);

	    $user->fill([
            'password' => Hash::make($request->password)
        ])->save();

	    Session::flash('user_update','Your Password is Changed');

	    return redirect('/user');

    }
}
