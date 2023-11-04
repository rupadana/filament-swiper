<?php

namespace Rupadana\FilamentSwiper\Infolists\Components;

use Filament\Infolists\Components\ImageEntry;
use Illuminate\Support\Arr;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasEffect;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasPagination;
use Rupadana\FilamentSwiper\Infolists\Components\Concerns\HasScrollbar;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SwiperImageEntry extends ImageEntry
{
    use HasEffect;
    use HasPagination;
    use HasScrollbar;

    protected string | Closure | null $collection = null;

    protected string | Closure | null $conversion = null;

    protected bool $spatie = false;

    public function collection(string | Closure | null $collection): static
    {
        $this->collection = $collection;

        return $this;
    }

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

    public function getSpatie(): bool
    {
        return $this->spatie;
    }

    public function spatie(bool $spatie = true): SwiperImageEntry
    {
        $this->spatie = $spatie;

        return $this;
    }

    public function conversion(string | Closure | null $conversion): static
    {
        $this->conversion = $conversion;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->evaluate($this->collection) ?? 'default';
    }

    public function getConversion(): ?string
    {
        return $this->evaluate($this->conversion);
    }

    public function getImageUrl(string $state = null): ?string
    {

        if ($this->getSpatie() == false) {
            return parent::getImageUrl($state);
        }

        $record = $this->getRecord();

        if (! $record) {
            return null;
        }

        $relationshipName = $this->getRelationshipName();

        if (filled($relationshipName)) {
            $record = $record->getRelationValue($relationshipName);
        }

        /** @var ?Media $media */
        $media = $record->media->first(fn (Media $media): bool => $media->uuid === $state);

        if (! $media) {
            return null;
        }

        $conversion = $this->getConversion();

        if ($this->getVisibility() === 'private') {
            try {
                return $media->getTemporaryUrl(
                    now()->addMinutes(5),
                    $conversion ?? '',
                );
            } catch (Throwable $exception) {
                // This driver does not support creating temporary URLs.
            }
        }

        return $media->getAvailableUrl(Arr::wrap($conversion));
    }

    public function getState(): array
    {

        if ($this->getSpatie() == false) {
            return parent::getState();
        }

        $collection = $this->getCollection();

        return $this->getRecord()->getRelationValue('media')
            ->filter(fn (Media $media): bool => blank($collection) || ($media->getAttributeValue('collection_name') === $collection))
            ->sortBy('order_column')
            ->map(fn (Media $media): string => $media->uuid)
            ->all();
    }
}
