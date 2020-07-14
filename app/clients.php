<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $table = "clients";
    public $timestamps = false;
    public $token = false;
}
