

@php
    //    $isCircular = $isCircular();
    //    $isSquare = $isSquare();
    //    $isStacked = $isStacked();
    //    $overlap = $isStacked ? ($getOverlap() ?? 2) : null;
    //    $ring = $isStacked ? ($getRing() ?? 2) : null;
    //    $height = $getHeight() ?? ($isStacked ? '2.5rem' : '8rem');
    //    $width = $getWidth() ?? (($isCircular || $isSquare) ? $height : null);

        $pagination = $getParentComponent()->getPagination();
        $navigation = $getParentComponent()->getNavigation();
        $slidesPerView = $getParentComponent()->getSlidesPerView();

        $paginationType = $getParentComponent()->getPaginationType();
        $autoplay = $getParentComponent()->getAutoplay();
        $autoplayDelay = $getParentComponent()->getAutoplayDelay();
        $paginationClickable = $getParentComponent()->getPaginationClickable();
        $paginationDynamicBullets = $getParentComponent()->getPaginationDynamicBullets();
        $paginationDynamicMainBullets = $getParentComponent()->getPaginationDynamicMainBullets();
        $paginationHideOnClick = $getParentComponent()->getPaginationHideOnClick();

        $scrollbar = $getParentComponent()->getScrollbar();
        $scrollbarDraggable = $getParentComponent()->getScrollbarDraggable();
        $scrollbarHide = $getParentComponent()->getScrollbarHide();
        $scrollbarSnapOnRelease = $getParentComponent()->getScrollbarSnapOnRelease();
        $scrollbarDragSize = $getParentComponent()->getScrollbarDragSize();

        $effect = $getParentComponent()->getEffect();


@endphp

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
        coverflow-effect-modifier="@js($getParentComponent()->getCoverflowEffectModifier())"
    coverflow-depth="@js($getParentComponent()->getCoverflowDepth())"
    coverflow-slide-shadows="@js($getParentComponent()->getCoverflowSlideShadows())"
    coverflow-stretch="@js($getParentComponent()->getCoverflowStretch())"
    @endif

    @if($effect == \Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry::CARDS_EFFECT)
        cards-per-slide-offset="@js($getParentComponent()->getCardsPerSlideOffset())"
    cards-per-slide-rotate="@js($getParentComponent()->getCardsPerSlideRotate())"
    cards-rotate="@js($getParentComponent()->getCardsRotate())"
    cards-slide-shadows="@js($getParentComponent()->getCardsSlideShadows())"
    @endif

    centered-slides="@js($getParentComponent()->getCenteredSlides())"
    space-between="@js($getParentComponent()->getSpaceBetween())"
>

    @foreach ($getComponents() as $infolistComponent)
        <swiper-slide class="rounded-3xl">
            {{ $infolistComponent }}
        </swiper-slide>
    @endforeach


</swiper-container>
