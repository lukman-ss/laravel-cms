<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class Table extends Component
{
    public $datas;
    public $headers;
    public $aliases;
    public $isLoading;
    public function render()
    {
        return view('livewire.content.table');
    }
}
