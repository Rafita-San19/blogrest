<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model implements AuthenticatableContract, AuthorizableContract
{
   
    protected $fillable = [
        'id', 'user','topic_id', 'mensaje'
    ];

    protected $hidden = [
        'created_at','update_at'
    ];
}
