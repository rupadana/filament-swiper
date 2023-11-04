<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

use Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry;

trait HasPagination {
    protected bool $pagination = false;

    protected string $paginationType = SwiperImageEntry::BULLETS;

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

    public function paginationType(string $type = SwiperImageEntry::BULLETS)
    {
        $this->paginationType = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaginationClickable(): bool
    {
        return $this->paginationClickable;
    }

    /**
     * @param bool $paginationClickable
     */
    public function paginationClickable(bool $paginationClickable = true)
    {
        $this->paginationClickable = $paginationClickable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPaginationDynamicBullets(): bool
    {
        return $this->paginationDynamicBullets;
    }

    /**
     * @param bool $paginationDynamicBullets
     */
    public function paginationDynamicBullets(bool $paginationDynamicBullets = true)
    {
        $this->paginationDynamicBullets = $paginationDynamicBullets;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaginationDynamicMainBullets(): int
    {
        return $this->paginationDynamicMainBullets;
    }

    /**
     * @param int $paginationDynamicMainBullets
     * @return HasPagination
     */
    public function paginationDynamicMainBullets(int $paginationDynamicMainBullets): HasPagination
    {
        $this->paginationDynamicMainBullets = $paginationDynamicMainBullets;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaginationHideOnClick(): bool
    {
        return $this->paginationHideOnClick;
    }

    /**
     * @param bool $paginationHideOnClick
     * @return HasPagination
     */
    public function paginationHideOnClick(bool $paginationHideOnClick = true): HasPagination
    {
        $this->paginationHideOnClick = $paginationHideOnClick;
        return $this;
    }


}
