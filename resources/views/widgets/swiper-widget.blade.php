
<x-filament-widgets::widget
    @class([
            'fi-section-content grid gap-6',
            'p-6 fi-section rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10' => $this->isDefaultWidget(),
            'grid-cols-1',
        ])
>
    <div class="fi-section-content">
        {{ $this->getFinalSwiper() }}
    </div>
</x-filament-widgets::widget>

