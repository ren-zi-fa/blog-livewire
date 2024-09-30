<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:200'])]
    public $title;

    #[Rule(['required'])]
    public $slug;

    #[Rule(['required', 'min:3'])]
    public $body;

    public function store(): void
    {
        $user = auth()->user();

        $data = $this->validate();

        $user->posts()->create($data);
        $this->reset();
    }
}
