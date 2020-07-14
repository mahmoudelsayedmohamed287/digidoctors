<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = "team_members";
    public $timestamps = false;
    public $token = false;
}
