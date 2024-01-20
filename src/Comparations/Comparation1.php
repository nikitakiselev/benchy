<?php

declare(strict_types=1);

namespace Nikitakiselev\Benchy\Comparations;

class Comparation1
{
    public static function compare(int $x1, int $y1, int $x2, int $y2): bool
    {
        return $x1 === $x2 && $y1 === $y2;
    }
}