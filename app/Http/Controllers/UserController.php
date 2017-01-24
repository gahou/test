<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function show() {
        return view('users', ['users' => User::all()]);
    }

    public function find($id) {
        return view('users', ['users' => [User::find($id)]]);
    }
}
