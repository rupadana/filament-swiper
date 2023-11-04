@php
    $limit = $getLimit();
    $state = \Illuminate\Support\Arr::wrap($getState());
    $limitedState = array_slice($state, 0, $limit);
    $isCircular = $isCircular();
    $isSquare = $isSquare();
    $isStacked = $isStacked();
    $overlap = $isStacked ? ($getOverlap() ?? 2) : null;
    $ring = $isStacked ? ($getRing() ?? 2) : null;
    $height = $getHeight() ?? ($isStacked ? '2.5rem' : '8rem');
    $width = $getWidth() ?? (($isCircular || $isSquare) ? $height : null);
    $defaultImageUrl = $getDefaultImageUrl();
    $pagination = $getPagination();
    $navigation = $getNavigation();
    $slidesPerView = $getSlidesPerView();
    $paginationType = $getPaginationType();
    $autoplay = $getAutoplay();
    $autoplayDelay = $getAutoplayDelay();
    $paginationClickable = $getPaginationClickable();
    $paginationDynamicBullets = $getPaginationDynamicBullets();
    $paginationDynamicMainBullets = $getPaginationDynamicMainBullets();
    $paginationHideOnClick = $getPaginationHideOnClick();

    $scrollbar = $getScrollbar();
    $scrollbarDraggable = $getScrollbarDraggable();
    $scrollbarHide = $getScrollbarHide();
    $scrollbarSnapOnRelease = $getScrollbarSnapOnRelease();
    $scrollbarDragSize = $getScrollbarDragSize();

    $effect = $getEffect();

//    dd($slidesPerView);

    if ((! count($limitedState)) && filled($defaultImageUrl)) {
        $limitedState = [null];
    }

    $ringClasses = \Illuminate\Support\Arr::toCssClasses([
        'ring-white dark:ring-gray-900',
        match ($ring) {
            0 => null,
            1 => 'ring-1',
            2 => 'ring-2',
            3 => 'ring',
            4 => 'ring-4',
            default => $ring,
        },
    ]);

    $hasLimitedRemainingText = $hasLimitedRemainingText();
    $isLimitedRemainingTextSeparate = $isLimitedRemainingTextSeparate();

    $limitedRemainingTextSizeClasses = match ($getLimitedRemainingTextSize()) {
        'xs' => 'text-xs',
        'sm', null => 'text-sm',
        'base', 'md' => 'text-base',
        'lg' => 'text-lg',
        default => $size,
    };
@endphp

<style>

    * {
        --swiper-theme-color: rgba(var(--primary-600));
        --swiper-scrollbar-drag-bg-color: rgba(var(--primary-600));
    }

    swiper-container {
        width: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div
    {{
        $attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-in-image flex items-center gap-x-2.5',
            ])
    }}

    ax-load
    ax-load-src="{{\Filament\Support\Facades\FilamentAsset::getScriptSrc('filament-swiper-scripts',
        'rupadana/filament-swiper')}}"
>
    @if (count($limitedState))
        <swiper-container

            @if($autoplay)
                autoplay-delay="{{$autoplayDelay}}"
            autoplay="@js($autoplay)"
            @endif
            slides-per-view="@js($slidesPerView)"

            @if($navigation)
                navigation="@js($navigation)"
            @endif



            @if($pagination)
                pagination="@js($pagination)"
            pagination-type="{{$paginationType}}"
            pagination-clickable="@js($paginationClickable)"
            pagination-dynamic-bullets="@js($paginationDynamicBullets)"
            pagination-dynamic-main-bullets="{{$paginationDynamicMainBullets}}"
            pagination-hide-on-click="{{$paginationHideOnClick}}"
            @endif

            @if($scrollbar)
                scrollbar="@js($scrollbar)"
            scrollbar-draggable="@js($scrollbarDraggable)"
            scrollbar-drag-size="{{$scrollbarDragSize}}"
            scrollbar-hide="@js($scrollbarHide)"
            scrollbar-snap-on-release="@js($scrollbarSnapOnRelease)"
            @endif


            effect="{{$effect}}"

            @if($effect == \Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry::COVERFLOW_EFFECT)
                coverflow-effect-modifier="@js($getCoverflowEffectModifier())"
            coverflow-depth="@js($getCoverflowDepth())"
            coverflow-slide-shadows="@js($getCoverflowSlideShadows())"
            coverflow-stretch="@js($getCoverflowStretch())"
            @endif

            @if($effect == \Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry::CARDS_EFFECT)
                cards-per-slide-offset="@js($getCardsPerSlideOffset())"
            cards-per-slide-rotate="@js($getCardsPerSlideRotate())"
            cards-rotate="@js($getCardsRotate())"
            cards-slide-shadows="@js($getCardsSlideShadows())"
            @endif

            centered-slides="@js($getCenteredSlides())"
        >
            @foreach ($limitedState as $stateItem)
                <swiper-slide>
                    <img
                        src="{{ filled($stateItem) ? $getImageUrl($stateItem) : $defaultImageUrl }}"
                        {{
                            $getExtraImgAttributeBag()
                                ->class([
                                    'max-w-none object-cover object-center',
                                    'rounded-full' => $isCircular,
                                    $ringClasses,
                                ])
                                ->style([
                                    "height: {$height}" => $height,
                                    "width: {$width}" => $width,
                                ])
                        }}
                    />
                </swiper-slide>
            @endforeach

            @if ($hasLimitedRemainingText && ($loop->iteration < count($limitedState)) && (! $isLimitedRemainingTextSeparate) && $isCircular)
                <div
                    style="
                            @if ($height) height: {{ $height }}; @endif
                            @if ($width) width: {{ $width }}; @endif
                        "
                    @class([
                        'flex items-center justify-center bg-gray-100 font-medium text-gray-500 dark:bg-gray-800 dark:text-gray-400',
                        'rounded-full' => $isCircular,
                        $limitedRemainingTextSizeClasses,
                        $ringClasses,
                    ])
                    @style([
                        "height: {$height}" => $height,
                        "width: {$width}" => $width,
                    ])
                >
                        <span class="-ms-0.5">
                            +{{ count($state) - count($limitedState) }}
                        </span>
                </div>
            @endif
        </swiper-container>

        @if ($hasLimitedRemainingText && ($loop->iteration < count($limitedState)) && ($isLimitedRemainingTextSeparate || (! $isCircular)))
            <div
                @class([
                    'font-medium text-gray-500 dark:text-gray-400',
                    $limitedRemainingTextSizeClasses,
                ])
            >
                +{{ count($state) - count($limitedState) }}
            </div>
        @endif
    @elseif (($placeholder = $getPlaceholder()) !== null)
        <x-filament-infolists::entries.placeholder>
            {{ $placeholder }}
        </x-filament-infolists::entries.placeholder>
    @endif
</div>
