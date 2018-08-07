<?php
/**
 * Created by PhpStorm.
 * User: eggy
 * Date: 8/7/18
 * Time: 9:38 AM
 */

namespace App\Services;


class NumberService
{
    public function kelipatanTiga($number)
    {
        if($number % 3 == 0){
            return true;
        }

        return false;
    }

    public function kelipatanLima($number)
    {
        if($number % 5 == 0){
            return true;
        }

        return false;
    }

}