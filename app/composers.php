<?php

View::composer('layouts.master', function($view){
    $view->with('user', Auth::user());
});