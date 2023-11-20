<?php

namespace App\Models\Components;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidebarModel extends Model
{
    use HasFactory;
    protected $table = 'sidebar';
    // protected $fillable = ['post_title', 'post_body', 'created_by'];
}
