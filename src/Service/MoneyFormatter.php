<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.5.23
 * Time: 12.15
 */

namespace App\Service;


class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    /**
     * MoneyFormatter constructor.
     * @param NumberFormatter $numberFormatter
     */
    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($num): string
    {
        return $this->numberFormatter->format($num).' €';
    }

    public function formatUsd($num): string
    {
        return '$'.$this->numberFormatter->format($num);
    }
}