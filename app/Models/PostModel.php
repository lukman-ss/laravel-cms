<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'post';
    protected $fillable = ['post_title', 'post_body', 'created_by'];
}
