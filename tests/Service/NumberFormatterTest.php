<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.5.23
 * Time: 12.00
 */

namespace App\Tests\Service;


use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    public function getConvertData()
    {
        return [
            [2835779, '2.84M'],
            [999500, '1.00M'],
            [999499, '999K'],
            [535216, '535K'],
            [99950, '100K'],
            [99949, '99 949'],
            [27533.78, '27 534'],
            [1000, '1 000'],
            [999.9999, '1 000'],
            [999.99, '999.99'],
            [533.1, '533.10'],
            [66.6666, '66.67'],
            [12.00, '12'],
            [-2835779, '-2.84M'],
            [-999500, '-1.00M'],
            [-999499, '-999K'],
            [-535216, '-535K'],
            [-99950, '-100K'],
            [-99949, '-99 949'],
            [-27533.78, '-27 534'],
            [-1000, '-1 000'],
            [-999.9999, '-1 000'],
            [-999.99, '-999.99'],
            [-533.1, '-533.10'],
            [-66.6666, '-66.67'],
            [-12.00, '-12'],
            [-123654.89, '-124K'],
        ];
    }

    /**
     * @dataProvider getConvertData
     */
    public function testConvert($num, $expected)
    {
        $formatter = new NumberFormatter();
        $result = $formatter->format($num);
        $this->assertEquals($expected, $result);
    }
}