<?php

declare(strict_types=1);

namespace Nikitakiselev\Tests\Benchmark;

use Nikitakiselev\Benchy\Comparations\Comparation4;

class ComparationMethod4Bench
{
    /**
     * @Revs(1000000)
     * @Iterations(3)
     */
    public function benchConsume(): void
    {
        $x1 = random_int(1_000_000_000_000_000_000, 9_223_372_036_854_775_807);
        $x2 = random_int(1_000_000_000_000_000_000, 9_223_372_036_854_775_807);
        $y1 = random_int(1_000_000_000_000_000_000, 9_223_372_036_854_775_807);
        $y2 = random_int(1_000_000_000_000_000_000, 9_223_372_036_854_775_807);

        Comparation4::compare($x1, $y1, $x2, $y2);
    }
}