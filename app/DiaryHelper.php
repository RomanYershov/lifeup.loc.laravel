<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 01.05.2018
 * Time: 10:28
 */

namespace App;

 class DiaryHelper
{
 public static function getStatByArray($stringStat){
    $daysArr = explode('@', $stringStat);
    $result = [];
    for ($i=0;$i<count($daysArr)-1;$i++){
        $result[$i] = explode('^', $daysArr[$i]);
    }
    return $result;
 }

 public static function getStatByString($statAsArr){
     $count = 0;
     $resStr = '';
     for($d=0; $d < 651; $d++)
     {
         if($count < 20){
             $resStr .= $statAsArr[$d]==="@"?"":$statAsArr[$d]."^";
         }
         else{
             $resStr .= $statAsArr[$d]."@";
             $count = 0;
             continue;
         }
         $count++;
     };
     return $resStr;
 }
}