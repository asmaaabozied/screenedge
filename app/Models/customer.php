<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class customer extends Authenticatable
{
    protected $table = "customers";
    protected $guarded = [];




}
