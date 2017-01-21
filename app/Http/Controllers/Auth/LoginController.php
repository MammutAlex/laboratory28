<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/admin';

	/**
	 * Viwe
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show()
	{
		return view('auth.login');
	}

	/**
	 * Login user and redirect to admin panel
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function login(Request $request)
	{
		$this->validate($request, [
			'email'    => 'required',
			'password' => 'required',
		]);

		if(auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
			return redirect($this->redirectTo);
		}

		return redirect()->back()->with('error', 'Невірний логін чи пароль');
	}

}