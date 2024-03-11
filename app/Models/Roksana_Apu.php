<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roksana_Apu extends Model
{
    public $table = 'roksana__apus';

    public $fillable = [
        'name',
        'designation',
        'Emplyee_Id'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'designation' => 'string',
        'Emplyee_Id' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required',
        'designation' => 'required'
    ];

    
}
