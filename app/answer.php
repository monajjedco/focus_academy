<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
protected $table='answers';
protected $fillable=['question_id','customer_id','support_id','answer_text'];


}
 