<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class OneMonthStat extends Model
{
   protected $table = "one_month_stats";
   protected $guarded = ['id'];

   public function user(){
       return $this->belongsTo("App\User");
   }
}


