<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'sbj_id';
    protected $fillable = ['sbj_name', 'sbj_description'];
    
}
