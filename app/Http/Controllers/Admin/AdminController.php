<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function home() {
        return view('admin.dashboard');
    }

    public function getLoginPage() {
        return view('admin.login');
    }

    public function getManagePage() {
        $managers = User::where('role','<',2)->get();
        $users = User::where('role',2)->get();

        return view('admin.manage', [ 'managers' => $managers, 'users' => $users ]);
    }
}
