<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 01.05.2018
 * Time: 10:28
 */

namespace App;

 class Helper
{
 public static function getStringByArray($stringStat){


    $daysArr = explode('@', $stringStat);
    $result = [];
    foreach ($daysArr as $day){
        array_push($result,explode('^', $day));
    }
//  dd($result[0][8]);
          return $result;
 }
 public static function getArrayByString($arrStat){

 }
}