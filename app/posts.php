<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = "posts";
    public $timestamps = false;
    public $token = false;
}