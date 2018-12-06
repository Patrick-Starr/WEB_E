<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 06.12.2018
 * Time: 12:27
 */

class checkDate
{

    public function Datecheck($cdate){

       date_default_timezone_set("Europe/Zurich");
        $timestamp = time();
        $date = date("d.m.Y", $timestamp);
        if($date > date_format(new DateTime($cdate),"d.m.Y")){
            echo 'expired';
        }else{
            echo 'NOT expired';
        }


    }

}