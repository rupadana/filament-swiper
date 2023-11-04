<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

use Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry;

trait HasEffect
{
    protected string $effect = '';

    protected int $coverflowEffectModifier = 1;

    protected int $coverflowDepth = 1;

    protected bool $coverflowSlideShadows = false;

    protected int $coverflowStretch = 0;

    protected int $cardsPerSlideOffset = 8;

    protected int $cardsPerSlideRotate = 2;

    protected bool $cardsRotate = true;

    protected bool $cardsSlideShadows = true;

    public function getEffect(): string
    {
        return $this->effect;
    }

    public function effect(string $effect = SwiperImageEntry::FADE_EFFECT): HasEffect
    {
        $this->effect = $effect;

        return $this;
    }

    public function getCoverflowEffectModifier(): int
    {
        return $this->coverflowEffectModifier;
    }

    public function coverflowEffectModifier(int $coverflowEffectModifier): HasEffect
    {
        $this->coverflowEffectModifier = $coverflowEffectModifier;

        return $this;
    }

    public function getCoverflowDepth(): int
    {
        return $this->coverflowDepth;
    }

    public function coverflowDepth(int $coverflowDepth): HasEffect
    {
        $this->coverflowDepth = $coverflowDepth;

        return $this;
    }

    public function getCoverflowSlideShadows(): bool
    {
        return $this->coverflowSlideShadows;
    }

    public function coverflowSlideShadows(bool $coverflowSlideShadows = true): HasEffect
    {
        $this->coverflowSlideShadows = $coverflowSlideShadows;

        return $this;
    }

    public function getCoverflowStretch(): int
    {
        return $this->coverflowStretch;
    }

    public function coverflowStretch(int $coverflowStretch): HasEffect
    {
        $this->coverflowStretch = $coverflowStretch;

        return $this;
    }

    public function getCardsPerSlideOffset(): int
    {
        return $this->cardsPerSlideOffset;
    }

    public function cardsPerSlideOffset(int $cardsPerSlideOffset = 8): HasEffect
    {
        $this->cardsPerSlideOffset = $cardsPerSlideOffset;

        return $this;
    }

    public function getCardsPerSlideRotate(): int
    {
        return $this->cardsPerSlideRotate;
    }

    public function cardsPerSlideRotate(int $cardsPerSlideRotate = 2): HasEffect
    {
        $this->cardsPerSlideRotate = $cardsPerSlideRotate;

        return $this;
    }

    public function getCardsRotate(): bool
    {
        return $this->cardsRotate;
    }

    public function cardsRotate(bool $cardsRotate = true): HasEffect
    {
        $this->cardsRotate = $cardsRotate;

        return $this;
    }

    public function getCardsSlideShadows(): bool
    {
        return $this->cardsSlideShadows;
    }

    public function cardsSlideShadows(bool $cardsSlideShadows = true): HasEffect
    {
        $this->cardsSlideShadows = $cardsSlideShadows;

        return $this;
    }
}
