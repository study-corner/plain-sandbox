<?php
declare(strict_types=1);

namespace App\Calculation;

class Multiply
{
    private $first;
    private $second;

    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function result(): int
    {
        return $this->first * $this->second;
    }
}