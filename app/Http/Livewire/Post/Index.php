<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Index extends Component
{
    public $posts;

    protected $listeners = ['refreshData' => '$refresh'];

    public function mount()
    {
        $this->loadPosts();
        $this->sidebar = view()->shared('sidebar');
    }

    public function loadPosts()
    {
        // Simulate loading posts from a database
        sleep(2); // Simulate a delay (replace with your actual data fetching logic)

        // Fetch posts
        $this->posts = Post::all();
    }
    public function render()
    {
        $data['active_main_link'] = 'dashboard';
        $data['active_sub_link'] = 'test';

        $data['list'] = [
            ['id' => 1, 'nama' => 'ucup'],
            ['id' => 1, 'nama' => 'ucup1'],
            ['id' => 1, 'nama' => 'ucup2'],
        ];

        return view('livewire.post.index', $data);
    }
}
