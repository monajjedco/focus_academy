<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
protected $table='classes';
protected $fillable=['code','name','status','maximum_students','description'];


}
 