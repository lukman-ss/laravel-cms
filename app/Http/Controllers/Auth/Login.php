<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class Login extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dasboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('livewire.login.index');
    }

    // public function render()
    // {
    //     return view('livewire.login.index');
    // }
}
