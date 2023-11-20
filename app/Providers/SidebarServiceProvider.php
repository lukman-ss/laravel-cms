<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Components\SidebarModel;
class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data = [];
        $result = SidebarModel::LeftJoin('sub_sidebar', 'sidebar.id', '=', 'sub_sidebar.sidebar_id')
        ->select('sidebar.*',  
                 'sub_sidebar.alias AS sub_sidebar_alias',
                 'sub_sidebar.url AS sub_sidebar_url')
        ->get();
        foreach ($result as $item) 
        {
            $mainLink = $item['url'];
            $mainAlias = $item['alias'];
            $subLinkAlias = $item['sub_sidebar_alias'];
            $subLinkUrl = $item['sub_sidebar_url'];
        
            // Check if the main link already exists in $data
            $mainLinkIndex = array_search(['main_link' => $mainLink], $data);
        
            if ($mainLinkIndex === false) {
                // If not, add it to $data with an empty 'sub_link' array
                $data[] = ['main_link' => $mainLink, 'main_alias' => $mainAlias];
                $mainLinkIndex = count($data) - 1; // Get the index of the newly added main link
            }
        
            // Check if sub_link_url is not null, then add it to the 'sub_link' array
            if ($subLinkUrl !== null) {
                $data[$mainLinkIndex]['sub'][] = array('sub_link' => $subLinkUrl, 'sub_alias' => $subLinkAlias);
            }
        }
        view()->share('sidebar', $data);
    }
}
