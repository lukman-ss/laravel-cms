<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $useAlternateLayout = false;
    public function render()
    {
        
        $data['sidebar'] = [
            ['main_link' => 'test','sub_link' => ['test', 'test2']],
            ['main_link' => 'dashboard','sub_link' => ['test', 'test2']],
        ];
        $data['active_main_link'] = 'dashboard';
        $data['active_sub_link'] = 'test';

        // return view('dashboard.dashboard', $data);
        return view('livewire.dashboard.dashboard', $data)->layout('layouts.app');
    }
}
