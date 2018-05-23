<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.5.23
 * Time: 11.43
 */

namespace App\Service;


class NumberFormatter
{
    public function format(float $num): string
    {

        if(abs($num) >= 999500 ){
            return number_format(($num/1000000), 2, '.', '').'M';
        }
        if(abs($num) >= 99950 ){
            return round(($num/1000), 0).'K';
        }
        if(abs($num) > 999.99 ){
            return number_format($num, 0, '.', ' ');
        }

        return round($num, 2);
    }
}