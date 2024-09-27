<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public \App\Livewire\Forms\UserForm $userForm;
    public function saveUser()
    {
        $user = $this->userForm->store();
        $this->dispatch('userCreated',$user->id);
      
        session()->flash('status', 'User successfully created.');
    }
    public function render()
    {
        return view('livewire.user.create');
    }
}
