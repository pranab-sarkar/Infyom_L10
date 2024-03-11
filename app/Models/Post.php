<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    public $fillable = [
        'name',
        'type_of_post'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type_of_post' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
