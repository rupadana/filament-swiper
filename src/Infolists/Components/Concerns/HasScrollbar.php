<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;


trait HasScrollbar {
    protected bool $scrollbar = false;
    protected bool $scrollbarDraggable = false;
    protected bool $scrollbarHide = false;
    protected bool $scrollbarSnapOnRelease = false;
    protected int $scrollbarDragSize = 100;

    /**
     * @return bool
     */
    public function getScrollbar(): bool
    {
        return $this->scrollbar;
    }

    /**
     * @param bool $scrollbar
     * @return HasScrollbar
     */
    public function scrollbar(bool $scrollbar = true): HasScrollbar
    {
        $this->scrollbar = $scrollbar;
        return $this;
    }

    /**
     * @return bool
     */
    public function getScrollbarDraggable(): bool
    {
        return $this->scrollbarDraggable;
    }

    /**
     * @param bool $scrollbarDraggable
     * @return HasScrollbar
     */
    public function scrollbarDraggable(bool $scrollbarDraggable = true): HasScrollbar
    {
        $this->scrollbarDraggable = $scrollbarDraggable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getScrollbarHide(): bool
    {
        return $this->scrollbarHide;
    }

    /**
     * @param bool $scrollbarHide
     * @return HasScrollbar
     */
    public function scrollbarHide(bool $scrollbarHide = true): HasScrollbar
    {
        $this->scrollbarHide = $scrollbarHide;
        return $this;
    }

    /**
     * @return bool
     */
    public function getScrollbarSnapOnRelease(): bool
    {
        return $this->scrollbarSnapOnRelease;
    }

    /**
     * @param bool $scrollbarSnapOnRelease
     * @return HasScrollbar
     */
    public function scrollbarSnapOnRelease(bool $scrollbarSnapOnRelease = true): HasScrollbar
    {
        $this->scrollbarSnapOnRelease = $scrollbarSnapOnRelease;
        return $this;
    }

    /**
     * @return int
     */
    public function getScrollbarDragSize(): int
    {
        return $this->scrollbarDragSize;
    }

    /**
     * @param int $scrollbarDragSize
     * @return HasScrollbar
     */
    public function scrollbarDragSize(int $scrollbarDragSize): HasScrollbar
    {
        $this->scrollbarDragSize = $scrollbarDragSize;
        return $this;
    }


}
