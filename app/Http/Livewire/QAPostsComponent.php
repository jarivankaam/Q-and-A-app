<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class QAPostsComponent extends Component
{
    public function render()
    {
        // return view of livewire component with posts data from database 
        return view('livewire.q-a-posts-component', ['posts' => Post::all()]);

            //mag ik een kusje?

     

    }
}
