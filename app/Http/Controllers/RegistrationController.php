<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller {
	//

	public function create() {

		return view('registration.create');
	}

	public function store(Request $request) {
		// validate the form
		$name = $request->name;
		$email = $request->email;
		$password1 = $request->password;
		$password2 = $request->password_confirmation;

		if ($password1 == $password2) {

			$password = bcrypt($request->password);

			$new_user = new User();
			$new_user->name = $name;
			$new_user->email = $email;
			$new_user->password = $password;
			$new_user->save();

			return redirect()->back()->with('success_message', 'your registration was sucessful');

		} else {

			return redirect()->back()->with('error_message', 'password didnt match!');
		}

	}
}
