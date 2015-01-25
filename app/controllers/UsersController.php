<?php
 
class UsersController extends BaseController {

	public function getRegister() {
	
		return View::make('layouts.register');
	
	}
	
	public function postRegister() {
         
		$validator = Validator::make(Input::all(),
    		array(
        		'username' => 'required|unique:users',
        		'email' => 'required|email|unique:users',
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
 
    		return Redirect::route('index')->with('message', 'You are now registered!');
        	
    	} else {
    	
        	// validation has failed, display error messages 
        	
        	return Redirect::route('getRegister')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();    	  
    	}
         
	}
	
	public function getLogin() {
	
		return View::make('layouts.login');
	
	}
	
	public function postLogin() {
		
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
    		return Redirect::intended('/')->with('message', 'You are now logged in');
		}
		else {
    		return Redirect::route('getLogin')
        		->with('message', 'Your username and password combination was incorrect')
        		->withInput();
		}
	}
	
	public function logout() {
    	
    	Auth::logout();
    	
    	return Redirect::route('index')->with('message', 'Your are now logged out!');
	
	}
	
	public function viewProfile($username) {
	
		$user = User::where('username', '=', $username)->first();
				
		return View::make('layouts.viewprofile', array('user' => $user));
	
	}
}