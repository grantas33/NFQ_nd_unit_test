<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.5.23
 * Time: 12.21
 */

namespace App\Tests\Service;


use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{

    public function testConvertEur()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->any())
            ->method('format')
            ->withConsecutive([2835779], [211.99])
            ->willReturnOnConsecutiveCalls('2.84M', '211.99');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $this->assertEquals('2.84M €', $moneyFormatter->formatEur(2835779));
        $this->assertEquals('211.99 €', $moneyFormatter->formatEur(211.99));
    }

    public function testConvertUsd()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->any())
            ->method('format')
            ->withConsecutive([2835779], [211.99])
            ->willReturnOnConsecutiveCalls('2.84M', '211.99');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $this->assertEquals('$2.84M', $moneyFormatter->formatUsd(2835779));
        $this->assertEquals('$211.99', $moneyFormatter->formatUsd(211.99));
    }



}