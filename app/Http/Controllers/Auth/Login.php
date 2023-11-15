<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login.index');
    }
}
