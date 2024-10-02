<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use \Livewire\WithPagination;

class Index extends Component
{


    public $perPage;
    public $search = '';

    public $sortDirection = 'ASC';
    public $sortColumn = 'name';

    public function doSort($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = ($this->sortDirection === 'ASC')
                ? 'DESC' : 'ASC';
            return;
        }
        $this->sortColumn = $column;
    }
    use WithPagination;

    public $listener = ['userModified' => 'render'];
    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::search($this->search)->orderBy($this->sortColumn, $this->sortDirection)
                ->with('roles')
                ->paginate($this->perPage, '*', 'userPage'),
        ]);
    }
}
