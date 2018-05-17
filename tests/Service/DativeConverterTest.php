<?php


namespace App\Tests\Service;


use App\Service\DativeConverter;
use PHPUnit\Framework\TestCase;

class DativeConverterTest extends TestCase
{
    public function getConvertData()
    {
        return [
            ['Kastytis', 'Kastyčiui'],
            ['Jurgis', 'Jurgiui'],
            ['Paulius', 'Pauliui'],
            ['Oleg', 'Oleg'],
        ];
    }

    /**
     * @dataProvider getConvertData
     */
    public function testConvert($name, $expected)
    {
        $converter = new DativeConverter();
        $result = $converter->convert($name);
        $this->assertEquals($expected, $result);
    }
}
