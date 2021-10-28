<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Livewire\Component;

class TestModal extends ModalComponent
{

    public $user;

    public function mount(User $user) {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.test-modal');
    }
}
