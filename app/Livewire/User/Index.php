<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    #[On('userCreated')]

    public function updateList($user) 
    {
        
    }
    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::with('roles')->get()
        ]);
    }
}
