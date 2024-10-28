<?php

namespace Rupadana\FilamentSwiper\Widgets\Components;

use Filament\Support\Components\ViewComponent;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasEffect;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasLoop;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasPagination;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasScrollbar;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasSpaceBetween;

class Swiper extends ViewComponent
{
    use HasEffect;
    use HasLoop;
    use HasPagination;
    use HasScrollbar;
    use HasSpaceBetween;

    protected static array $methodCache = [];

    const PROGRESSBAR = 'progressbar';

    const BULLETS = 'bullets';

    const FRACTIONAL = 'fraction';

    const FADE_EFFECT = 'fade';

    const COVERFLOW_EFFECT = 'coverflow';

    const CARDS_EFFECT = 'cards';

    protected bool $navigation = true;

    protected bool $centeredSlides = false;

    protected bool $autoplay = false;

    protected int $autoplayDelay = 3000;

    protected int $slidesPerView = 1;

    protected string $view = 'filament-swiper::widgets.components.swiper';

    protected string $title = '';

    protected array $components = [];

    public static function make()
    {
        $static = new static;

        return $static;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function title(string $title): Swiper
    {
        $this->title = $title;

        return $this;
    }

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

    public function centeredSlides(bool $centeredSlides = true): Swiper
    {
        $this->centeredSlides = $centeredSlides;

        return $this;
    }

    public function getChildComponentContainers(bool $withHidden = false): array
    {
        if (! $this->hasChildComponentContainer($withHidden)) {
            return [];
        }

        return [
            'default' => SwiperContainer::make($this->getLivewire())
                ->parentComponent($this)
                ->components($this->getChildComponents())
                ->elementTag('swiper-container'),
        ];
    }

    public function schema(array $schema): Swiper
    {
        $this->components = $schema;

        return $this;
    }

    public function getComponents(): array
    {
        return $this->components;
    }

    public function getExtraAttributes()
    {
        return [];
    }
}
