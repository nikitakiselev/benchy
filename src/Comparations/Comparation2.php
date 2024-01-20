<?php

declare(strict_types=1);

namespace Nikitakiselev\Benchy\Comparations;

class Comparation2
{
    public static function compare(int $x1, int $y1, int $x2, int $y2): bool
    {
        if ($x1 !== $x2) return false;
        return $y1 === $y2;
    }
}