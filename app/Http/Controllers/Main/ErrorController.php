<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index()
    {
        $post = 'This page is not done yet';
        return view('site.main.errors.transaction', compact('post'));
    }
}
