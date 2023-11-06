@php
    //    $isCircular = $isCircular();
    //    $isSquare = $isSquare();
    //    $isStacked = $isStacked();
    //    $overlap = $isStacked ? ($getOverlap() ?? 2) : null;
    //    $ring = $isStacked ? ($getRing() ?? 2) : null;
    //    $height = $getHeight() ?? ($isStacked ? '2.5rem' : '8rem');
    //    $width = $getWidth() ?? (($isCircular || $isSquare) ? $height : null);

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

        $loop = $isLoop();


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


<div class="py-16">
    <h2 class="mt-4 text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl ">
        {{$getTitle()}}
    </h2>

    <div
        {{
            $attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class([
                    'fi-in-image flex items-center gap-x-2.5 max-w-7xl mx-auto',
                ])
        }}

        ax-load
        ax-load-src="{{\Filament\Support\Facades\FilamentAsset::getScriptSrc('filament-swiper-scripts',
        'rupadana/filament-swiper')}}"
    >

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

            loop="@js($loop)"
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
            space-between="@js($getSpaceBetween())"
        >

            @foreach($getComponents() as $component)
                <swiper-slide>
                    {{$component}}
                </swiper-slide>
            @endforeach

        </swiper-container>
        {{--        {{ $getChildComponentContainers()['default'] }}--}}


    </div>

</div>
