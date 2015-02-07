<?php

class UsersController extends BaseController {


	/**
	 *
	 * Handle user registration
	 *
	 */

	public function postRegister() {

		$validator = Validator::make(Input::all(),
  		array(
      		'username' => 'required|unique:users',
      		'email' => 'email',
      		'password' => 'required|min:6',
      		'password_confirm' => 'required|min:6|same:password',
  		));

    if ($validator->passes()) {

      // validation has passed, save user in DB
      $user = new User;
  		$user->username = Input::get('username');
  		$user->email = Input::get('email');
  		$user->password = Hash::make(Input::get('password'));
  		$user->save();

  		Auth::login($user);

  		return Redirect::route('index')->with('authmessage', 'You are now registered!');

  	} else {

      // validation has failed, display error messages

      return Redirect::back()->with('authmessage', 'The following errors occurred')->withErrors($validator)->withInput();
  	}

	} // end postRegister() function



	/**
	 *
	 * Handle user login
	 *
	 */

	public function postLogin() {

		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{

				return Redirect::back()->with('authmessage', 'You are now logged in');

		} else {

			return Redirect::back()
        ->with('authmessage', 'Your username and password combination was incorrect')
        ->withInput();
		}

	} // end postLogin() function



	/**
	 *
	 * Logout function
	 *
	 */

	public function logout() {

    	Auth::logout();

    	return Redirect::back()->with('authmessage', 'Your are now logged out!');

	} // end logout() function



	/**
	 *
	 * View a users profile given the username
	 *
	 */

	public function viewProfile($username) {

		$user = User::where('username', '=', $username)->first();

		return View::make('layouts.viewprofile', array('user' => $user));

	} // end viewProfile() function



} // end UsersController
