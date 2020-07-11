<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $primaryKey = 'yrs_id';
    protected $fillable = ['yrs_name'];
}
