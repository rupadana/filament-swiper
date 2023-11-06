<?php

namespace Rupadana\FilamentSwiper\Widgets;

use Filament\Widgets\Widget;
use Rupadana\FilamentSwiper\Widgets\Components\Swiper;

class SwiperWidget extends Widget
{
    protected static ?int $sort = -5;

    protected static string $view = 'filament-swiper::widgets.swiper-widget';

    protected int | string | array $columnSpan = 'full';

    protected bool $defaultWidget = true;

    public function isDefaultWidget(): bool
    {
        return $this->defaultWidget;
    }

    public function getFinalSwiper()
    {
        return $this->getSwiper(Swiper::make())
            ->schema($this->getComponents());
    }

    public function getSwiper(Swiper $swiper)
    {
        return $swiper
            ->loop()
            ->navigation(false)
            ->pagination()
            ->paginationClickable()
            ->paginationHideOnClick()
            ->autoplay();
    }

    public function getComponents(): array
    {
        return [];
    }
}
