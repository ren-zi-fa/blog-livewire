<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function placeholder()
    {
        return view('livewire.post.placeholder');
    }

    public function render()
    {
        return view('livewire.post.index', ['posts' => Post::get()]);
    }
}
