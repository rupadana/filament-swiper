<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

trait HasSpaceBetween
{
    protected int $spaceBetween = 0;

    public function getSpaceBetween(): int
    {
        return $this->spaceBetween;
    }

    public function spaceBetween(int $spaceBetween): HasSpaceBetween
    {
        $this->spaceBetween = $spaceBetween;

        return $this;
    }
}
