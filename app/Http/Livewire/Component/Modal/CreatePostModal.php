<?php

namespace App\Http\Livewire\Component\Modal;

use Livewire\Component;

class CreatePostModal extends Component
{
    public $modal_id;
    public $title;
    public function render()
    {
        return view('livewire.component.modal.create-post-modal');
    }
}
