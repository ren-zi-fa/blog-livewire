<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    public User $user;
    public function render()
    {
       
        return view('livewire.user.user-table');
    }
}
