<?php
 
class UsersController extends BaseController {

	public function getRegister() {
	
		return View::make('layouts.register');
	
	}
	
	public function postRegister() {
         
	}

}