<?php

namespace App\Livewire\Post;


use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{

    #[Rule(['required'])]
    public string $title;

    #[Rule(['required'])]
    public string $slug;

    #[Rule(['required'])]
    public string $body;


    public function store()
    {
        $user = auth()->user();
        $validated = $this->validate();
        $user->posts()->create($validated);
        $this->reset(); 

        session()->flash('status', 'Post successfully created.');
 
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
