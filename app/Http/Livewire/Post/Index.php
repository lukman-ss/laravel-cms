<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\PostModel;
use App\Models\Components\SidebarModel;
class Index extends Component
{
    public $posts;
    public $list; // Initialize as an empty array
    public $isLoading = true; // Set the initial state
    protected $listeners = ['refreshData' => '$refresh'];

    public function mount()
    {
    }
    public function render()
    {
        // $result = SidebarModel::leftJoin('sub_sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        // // ->select('sidebar.*', 'sub_sidebar.name as sub_sidebar_name')
        // ->union(
        //     SubSidebarModel::rightJoin('sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        //         // ->select('sidebar.*', 'sub_sidebar.name as sub_sidebar_name')
        //         ->whereNull('sidebar.id')
        // )
        // ->get();
        // $result = SidebarModel::leftJoin('sub_sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        // // ->select('sidebar.*', 'sub_sidebar.name as sub_sidebar_name')
        // ->union(
        //     SubSidebarModel::rightJoin('sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        //         // ->select('sidebar.*', 'sub_sidebar.name as sub_sidebar_name')
        //         ->whereNull('sidebar.id')
        // )
        // ->get();
        // $data = [];
        // $result = SidebarModel::LeftJoin('sub_sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        // ->select('sidebar.*',  
        //          'sub_sidebar.alias AS sub_sidebar_alias',
        //          'sub_sidebar.url AS sub_sidebar_url')
        // ->get();
        // foreach ($result as $item) 
        // {
        //     $mainLink = $item['url'];
        //     $mainAlias = $item['alias'];
        //     $subLinkAlias = $item['sub_sidebar_alias'];
        //     $subLinkUrl = $item['sub_sidebar_url'];
        
        //     // Check if the main link already exists in $data
        //     $mainLinkIndex = array_search(['main_link' => $mainLink], $data);
        
        //     if ($mainLinkIndex === false) {
        //         // If not, add it to $data with an empty 'sub_link' array
        //         $data[] = ['main_link' => $mainLink, 'main_alias' => $mainAlias];
        //         $mainLinkIndex = count($data) - 1; // Get the index of the newly added main link
        //     }
        
        //     // Check if sub_link_url is not null, then add it to the 'sub_link' array
        //     if ($subLinkUrl !== null) {
        //         $data[$mainLinkIndex]['sub'][] = array('sub_link' => $subLinkUrl, 'sub_alias' => $subLinkAlias);
        //     }
        // }
        // print_r($data);
        // exit;
        $data['active_main_link'] = 'dashboard';
        $data['active_sub_link'] = 'test';
        $data['list'] = PostModel::latest()->get();
        // sleep(100);
        $data['isLoading'] = false; // Add this line
        
        return view('livewire.post.index', $data);
    }
    public function loadPosts()
    {
        // Set loading state before fetching data
        $this->isLoading = true;

        // Simulate loading posts from a database
        sleep(2); // Simulate a delay (replace with your actual data fetching logic)

        // Fetch posts
        $this->list = PostModel::latest()->get();
        // Set loading state after fetching data
        $this->isLoading = false;
    }
    
}
