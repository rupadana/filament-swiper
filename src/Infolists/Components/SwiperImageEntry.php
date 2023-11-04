<?php

namespace Rupadana\FilamentSwiper\Infolists\Components;

use Filament\Infolists\Components\ImageEntry;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasEffect;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasPagination;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasScrollbar;

class SwiperImageEntry extends ImageEntry
{
    use HasEffect;
    use HasPagination;
    use HasScrollbar;

    const PROGRESSBAR = 'progressbar';

    const BULLETS = 'bullets';

    const FRACTIONAL = 'fraction';

    const FADE_EFFECT = 'fade';

    const COVERFLOW_EFFECT = 'coverflow';

    const CARDS_EFFECT = 'cards';

    protected string $view = 'filament-swiper::infolists.components.swiper-image-entry';

    protected bool $navigation = true;

    protected bool $centeredSlides = false;

    protected bool $autoplay = false;

    protected int $autoplayDelay = 3000;

    protected int $slidesPerView = 1;

    public function getNavigation(): bool
    {
        return $this->navigation;
    }

    public function navigation(bool $navigation = true)
    {
        $this->navigation = $navigation;

        return $this;
    }

    public function getSlidesPerView(): int
    {
        return $this->slidesPerView;
    }

    public function slidesPerView(int $slidesPerView = 3)
    {
        $this->slidesPerView = $slidesPerView;

        return $this;
    }

    public function getAutoplay(): bool
    {
        return $this->autoplay;
    }

    public function autoplay(bool $autoplay = true)
    {
        $this->autoplay = $autoplay;

        return $this;
    }

    public function getAutoplayDelay(): int
    {
        return $this->autoplayDelay;
    }

    public function autoplayDelay(int $autoplayDelay = 3000)
    {
        $this->autoplayDelay = $autoplayDelay;

        return $this;
    }

    public function getCenteredSlides(): bool
    {
        return $this->centeredSlides;
    }

    public function centeredSlides(bool $centeredSlides = true): SwiperImageEntry
    {
        $this->centeredSlides = $centeredSlides;

        return $this;
    }
}
