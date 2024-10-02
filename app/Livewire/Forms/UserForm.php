<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{


    #[Validate(['required', 'string', 'max:50'])]
    public $name;

    #[Validate(['required', 'email'])]
    public $email;

    #[Validate(['required', 'string', 'min:8'])]
    public $password;

    #[Validate(['required', 'string'])]
    public $role;

    public function store()
    {
        $validatedData = $this->validate();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        $user->assignRole($this->role);
        $this->reset();

        return $user;
    }
    public function setUser($userUuid)
    {
        $this->user = $userUuid;
        $this->name = $userUuid->name;
        $this->email = $userUuid->email;
    }
    public User $user;
    public function edit()
     {
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email'],
        ]);

        $this->user->update($validatedData);
     }
}
