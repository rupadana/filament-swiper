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

    <div {{
            $attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class([
                    'fi-in-image flex items-center gap-x-2.5 max-w-7xl mx-auto px-6 md:px-12 xl:px-6 mt-16',
                ])
        }} ax-load ax-load-src="{{\Filament\Support\Facades\FilamentAsset::getScriptSrc('filament-swiper-scripts',
        'rupadana/filament-swiper')}}">



        {{ $getChildComponentContainers()['default'] }}


    </div>

</div>