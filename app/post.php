<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['user_id', 'title', 'tag1', 'tag2', 'tag3', 'body'];
}
