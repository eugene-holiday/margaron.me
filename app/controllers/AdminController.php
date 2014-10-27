<?php

use Margaron\Admin\Dashboard;

class AdminController extends \BaseController {

    protected $layout = 'dashboard';

    function __construct()
    {
        $this->beforeFilter('auth');

        $dash = new Dashboard();
        $menu = $dash->menu();
        View::share('menu', $menu);
    }

    public function index()
    {
        $this->layout->content = "Hello" ;
    }

    public function missingMethod($parameters = array())
    {
        dd( $parameters);
    }
}