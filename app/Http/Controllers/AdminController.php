<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $view = view('Pages.Admin.Index');
        $view->with('title','GhostShell.eu | Strona główna');
        return $view;
    }
}
