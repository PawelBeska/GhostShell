<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Permissions;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (auth::user()->hasPermission('*')) {
                $view = view('Pages.Admin.Index');
                $view->with('title', 'GhostShell.eu | Panel administratora');
                return $view;
            } else {
                $view = view('Pages.Panel.Index');
                $view->with('title', 'GhostShell.eu | Strona główna');
                return $view;
            }
        } else {
            return AuthController::index();
        }
    }
}
