<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Form;


class UserForm extends Form
{
    #[Rule(['required', 'string', 'max:50'])]
    public $name;

    #[Rule(['required', 'email'])]
    public $email;

    #[Rule(['required', 'string', 'min:8'])] 
    public $password;

    #[Rule(['required', 'string'])] 
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
}
