<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

use Rupadana\FilamentSwiper\Infolists\Components\Swiper;

trait HasPagination
{
    protected bool $pagination = false;

    protected string $paginationType = Swiper::BULLETS;

    protected bool $paginationClickable = false;

    protected bool $paginationDynamicBullets = false;

    protected int $paginationDynamicMainBullets = 1;

    protected bool $paginationHideOnClick = false;

    public function getPagination(): bool
    {
        return $this->pagination;
    }

    public function pagination(bool $pagination = true)
    {
        $this->pagination = $pagination;

        return $this;
    }

    public function getPaginationType(): string
    {
        return $this->paginationType;
    }

    public function paginationType(string $type = Swiper::BULLETS)
    {
        $this->paginationType = $type;

        return $this;
    }

    public function getPaginationClickable(): bool
    {
        return $this->paginationClickable;
    }

    public function paginationClickable(bool $paginationClickable = true)
    {
        $this->paginationClickable = $paginationClickable;

        return $this;
    }

    public function getPaginationDynamicBullets(): bool
    {
        return $this->paginationDynamicBullets;
    }

    public function paginationDynamicBullets(bool $paginationDynamicBullets = true)
    {
        $this->paginationDynamicBullets = $paginationDynamicBullets;

        return $this;
    }

    public function getPaginationDynamicMainBullets(): int
    {
        return $this->paginationDynamicMainBullets;
    }

    public function paginationDynamicMainBullets(int $paginationDynamicMainBullets): HasPagination
    {
        $this->paginationDynamicMainBullets = $paginationDynamicMainBullets;

        return $this;
    }

    public function getPaginationHideOnClick(): bool
    {
        return $this->paginationHideOnClick;
    }

    public function paginationHideOnClick(bool $paginationHideOnClick = true): HasPagination
    {
        $this->paginationHideOnClick = $paginationHideOnClick;

        return $this;
    }
}
