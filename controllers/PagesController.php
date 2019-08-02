<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    public function index()
    {
        $tasks = App::get('db')->fetchAll("tasks");

        return view('index', compact('tasks'));
    }

    public function home()
    {

        return view('home');
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function signUp()
    {
        return view('signUp');
    }
}