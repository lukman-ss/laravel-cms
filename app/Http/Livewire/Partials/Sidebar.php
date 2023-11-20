<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $sidebar;
    public $active_main_link;
    public $active_sub_link;
    public function render()
    {
   
        return view('livewire.partials.sidebar');
    }
}
