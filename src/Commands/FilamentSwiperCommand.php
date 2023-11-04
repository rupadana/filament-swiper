<?php

namespace Rupadana\FilamentSwiper\Commands;

use Illuminate\Console\Command;

class FilamentSwiperCommand extends Command
{
    public $signature = 'filament-swiper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
