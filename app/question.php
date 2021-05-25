<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
protected $table='questions';
protected $fillable=['customer_id','question_text','question_status'];


}
 