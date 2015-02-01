<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('application');
	}

	public function login()
	{
		$data = ['title' => 'Login'];

		return View::make('frontend.login', $data);
	}

	public function signin()
	{
		$rules = ['email_address'   => 'required|email',
				  'password' 		=> 'required'];

		$input = ['email_address' => Input::get('email_address'),
				  'password'      => Input::get('password')];

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		try
			{
				// Login credentials
				$credentials = array(
					'email'      => Input::get('email_address'),
					'password'   => Input::get('password')
				);
			
			// Authenticate the user
			$user = Sentry::authenticate($credentials, false);

			}
			catch (\Exception $e)
			{
				//echo 'Login field is required.';
				return Redirect::back()->withInput(Input::except('password'))->withErrors(['login' => $e->getMessage()]);
									   
			}

		return Redirect::route('login_url')->with('message', 'Login successful');

			
	}

		
		
	
}
