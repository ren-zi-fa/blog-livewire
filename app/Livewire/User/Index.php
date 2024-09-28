<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    #[On('userCreated')]
    #[On('userDeleted')]

    public function updateList($user) {}
    use \Livewire\WithPagination;
    public function render()
    {
        $users =  User::with('roles')->paginate(5);
        return view('livewire.user.index', [
            'users' => $users
        ]);
    }
}
