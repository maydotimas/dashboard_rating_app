<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $table = 'reactions';
    protected $fillable = ['mobile_id,lat,long,reaction'];

}
