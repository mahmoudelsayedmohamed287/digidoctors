<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $table = "contact_us";
    public $timestamps = false;
    public $token = false;
}
