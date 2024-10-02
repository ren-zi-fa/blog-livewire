<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public ?User $user;

    public UserForm $userForm;
    
    public function mount(User $user)
    {
        $this->userForm->setUser($user);
    }



    public function editUser()
     {
        $this->userForm->edit();
        $this->closeModalWithEvents([
            Index::class => 'userModified',
        ]);
    }

    public function render()
    {
        return view('livewire.user.edit-user');
    }
}
