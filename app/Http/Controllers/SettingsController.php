<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\MainRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('site.main.user.settings');
    }

    public function update(MainRequest $request)
    {
        auth()->user()->update($request->validated());
        return redirect()->route('settings.index');
    }
}
