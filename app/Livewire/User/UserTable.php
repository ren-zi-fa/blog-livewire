<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $users = User::with('roles')->get();

        return view('livewire.user.user-table', compact('users'));
    }
}
