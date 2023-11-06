<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

trait HasLoop
{
    protected bool $loop = false;

    public function isLoop(): bool
    {
        return $this->loop;
    }

    public function loop(bool $loop = true): HasLoop
    {
        $this->loop = $loop;

        return $this;
    }
}
