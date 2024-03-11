<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = 'teachers';

    public $fillable = [
        'name_en',
        'name_bn'
    ];

    protected $casts = [
        'id' => 'integer',
        'name_en' => 'string',
        'name_bn' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
