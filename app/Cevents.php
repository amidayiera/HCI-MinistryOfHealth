<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cevents extends Model
{
    protected $table ='eregistrations';
    protected $fillable= ['description','location','time','date','organization','image'];
}
