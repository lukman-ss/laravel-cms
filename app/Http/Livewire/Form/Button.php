<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Button extends Component
{
    public $type;
    public $button_class;
    public $title;
    public $isModal = false;
    public $modal_id = null;
    public function render()
    {
        return view('livewire.form.button');
    }
}
