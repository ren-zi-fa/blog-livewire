<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class DeleteUser extends Component
{
   
    public $userUuid;

    public function mount($userUuid)
    {
        $this->userUuid = $userUuid;
    }

    public function deleteUser()
    {
        User::where('uuid', $this->userUuid)->delete();
        session()->flash('status', 'User deleted successfully.');
        $this->dispatch('userDeleted',$this->userUuid);

    }


    public function render()
    {
        return view('livewire.user.delete-user');
    }
}
