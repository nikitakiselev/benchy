<?php

declare(strict_types=1);

namespace Nikitakiselev\Tests\Benchmark;

use Nikitakiselev\Benchy\Comparations\Comparation1;

class ComparationMethod1StaticNumbersBench
{
    /**
     * @Revs(1000000)
     * @Iterations(10)
     */
    public function benchConsume(): void
    {
        Comparation1::compare(
            2731700929654497024,
            2979110616955381707,
            2202052513465999097,
            8382794280816324831,
        );
    }
}