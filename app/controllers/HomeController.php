<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.master';

	public function index()
	{
        $this->layout->content =  View::make('home.index');
	}

    public function auth()
    {
        $this->layout->content =  View::make('auth.login');
    }

    public function doAuth()
    {
        $auth = Auth::attempt([
            'login'=>Input::get('login'),
            'password'=>Input::get('password')
        ], true);

        if(!$auth){
            return Redirect::route('auth')
                ->with('error', 'Error :(');
        }

        return Redirect::home();
    }

    public function logout(){
        Auth::logout();
        return Redirect::home();
    }

}
