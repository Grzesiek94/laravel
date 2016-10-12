<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AdminController extends BaseController
{

		use ValidatesRequests;

		public function dashboard()
		{
			return view('dashboard');
		}

		public function login(Request $request)
		{

		}

		public function logout()
		{
			Auth::logout();
			return redirect()->route('homepage')->withSuccess('Wylogowano pomyślnie');
		}
}
