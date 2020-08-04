<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'contents',
        'user_id'
    ];
    

    Public function User()
    {
        return  $this->belongsTo('App\User');
    }
} 
