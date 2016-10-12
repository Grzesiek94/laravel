<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
    		$user->mapRequest(['name', 'email', 'password']);
        $user->save();

  			return redirect()->route('user.index')->withSuccess('Użytkownik dodany pomyślnie!');
    }
}
