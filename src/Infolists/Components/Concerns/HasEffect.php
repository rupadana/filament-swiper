<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

use Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry;

trait HasEffect {
    protected string $effect = '';

    protected int $coverflowEffectModifier = 1;

    protected int $coverflowDepth = 1;

    protected bool $coverflowSlideShadows = false;

    protected int $coverflowStretch = 0;

    protected int $cardsPerSlideOffset = 8;

    protected int $cardsPerSlideRotate = 2;

    protected bool $cardsRotate = true;

    protected bool $cardsSlideShadows = true;

    /**
     * @return string
     */
    public function getEffect(): string
    {
        return $this->effect;
    }

    /**
     * @param string $effect
     * @return HasEffect
     */
    public function effect(string $effect = SwiperImageEntry::FADE_EFFECT): HasEffect
    {
        $this->effect = $effect;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoverflowEffectModifier(): int
    {
        return $this->coverflowEffectModifier;
    }

    /**
     * @param int $coverflowEffectModifier
     * @return HasEffect
     */
    public function coverflowEffectModifier(int $coverflowEffectModifier): HasEffect
    {
        $this->coverflowEffectModifier = $coverflowEffectModifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoverflowDepth(): int
    {
        return $this->coverflowDepth;
    }

    /**
     * @param int $coverflowDepth
     * @return HasEffect
     */
    public function coverflowDepth(int $coverflowDepth): HasEffect
    {
        $this->coverflowDepth = $coverflowDepth;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCoverflowSlideShadows(): bool
    {
        return $this->coverflowSlideShadows;
    }

    /**
     * @param bool $coverflowSlideShadows
     * @return HasEffect
     */
    public function coverflowSlideShadows(bool $coverflowSlideShadows = true): HasEffect
    {
        $this->coverflowSlideShadows = $coverflowSlideShadows;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoverflowStretch(): int
    {
        return $this->coverflowStretch;
    }

    /**
     * @param int $coverflowStretch
     * @return HasEffect
     */
    public function coverflowStretch(int $coverflowStretch): HasEffect
    {
        $this->coverflowStretch = $coverflowStretch;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardsPerSlideOffset(): int
    {
        return $this->cardsPerSlideOffset;
    }

    /**
     * @param int $cardsPerSlideOffset
     * @return HasEffect
     */
    public function cardsPerSlideOffset(int $cardsPerSlideOffset = 8): HasEffect
    {
        $this->cardsPerSlideOffset = $cardsPerSlideOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardsPerSlideRotate(): int
    {
        return $this->cardsPerSlideRotate;
    }

    /**
     * @param int $cardsPerSlideRotate
     * @return HasEffect
     */
    public function cardsPerSlideRotate(int $cardsPerSlideRotate = 2): HasEffect
    {
        $this->cardsPerSlideRotate = $cardsPerSlideRotate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCardsRotate(): bool
    {
        return $this->cardsRotate;
    }

    /**
     * @param bool $cardsRotate
     * @return HasEffect
     */
    public function cardsRotate(bool $cardsRotate = true): HasEffect
    {
        $this->cardsRotate = $cardsRotate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCardsSlideShadows(): bool
    {
        return $this->cardsSlideShadows;
    }

    /**
     * @param bool $cardsSlideShadows
     * @return HasEffect
     */
    public function cardsSlideShadows(bool $cardsSlideShadows = true): HasEffect
    {
        $this->cardsSlideShadows = $cardsSlideShadows;
        return $this;
    }




}
