<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function getLoginPage() {
        return view('login');
    }

    public function getSuccessUploadPage() {
        return view('success');
    }

    public function getUploadPage() {
        return view('upload_file');
    }

    public function getUploadErrorPage() {
        return view('upload_file_error');
    }
}
