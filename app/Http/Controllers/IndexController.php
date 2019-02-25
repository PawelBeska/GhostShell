<?php

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        $view = view('Pages.Index');
        $view->with('title','GhostShell.eu | Strona główna');
        return $view;
    }

}
