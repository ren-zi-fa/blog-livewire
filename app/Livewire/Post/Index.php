<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Index extends Component
{
    public \App\Models\Post $post;

    public function render()
    {
        return view('livewire.post.index');
    }
}
