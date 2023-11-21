<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Input extends Component
{
    public $class_div;
    public $class_label;
    public $label;
    public $type;
    public $class_input;
    public $name;
    public $placeholder = '';
    public $value = '';
    public function render()
    {
        return view('livewire.form.input');
    }
}
