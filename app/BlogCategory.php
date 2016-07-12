<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'blog_categories';
    protected $fillable = array('category');
}
