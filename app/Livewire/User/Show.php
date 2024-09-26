<?php

namespace App\Livewire\User;

use Livewire\Component;

class Show extends Component
{
    public \App\Models\User $user;

    public function render()
    {
        return view('livewire.user.show')->title($this->user->name);
    }
}
