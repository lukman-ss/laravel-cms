<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        // $data['sidebar'] = [
        //     ['main_link' => 'test','sub_link' => ['test', 'test2']],
        //     ['main_link' => 'dashboard','sub_link' => ['test', 'test2']],
        // ];
        $data['active_main_link'] = 'dashboard';
        $data['active_sub_link'] = 'test';

        return view('dashboard.dashboard', $data);
    }
}
