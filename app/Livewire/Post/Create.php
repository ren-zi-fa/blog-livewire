<?php

namespace App\Livewire\Post;



use Livewire\Component;

class Create extends Component
{

    public \App\Livewire\Forms\PostForm $form;


    public function save():void
    {
       
        $this->form->store();
        session()->flash('status', 'Post successfully created.');
 
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
