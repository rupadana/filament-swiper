# The Most Modern Mobile Touch Slider now on Filamentphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rupadana/filament-swiper.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-swiper)
[![Total Downloads](https://img.shields.io/packagist/dt/rupadana/filament-swiper.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-swiper)


![Image](https://raw.githubusercontent.com/rupadana/filament-swiper/main/docs/images/filament-swiper-image.png)

This is a Swiper Component for filament, using [SwiperJS](https://swiperjs.com/).

## Installation

You can install the package via composer:

```bash
composer require rupadana/filament-swiper
```


## Usage

Available API

```php
public function infolists(Infolists $infolists) {
    return $infolists
    ->schema([
        \Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry::make('attachment')
            ->navigation(false)
            ->pagination()
            ->paginationType(SwiperImageEntry::BULLETS)
            ->paginationClickable()
            ->paginationDynamicBullets()
            ->paginationHideOnClick()
            ->paginationDynamicMainBullets(2)
            ->scrollbar()
            ->scrollbarDragSize(100)
            ->scrollbarDraggable()
            ->scrollbarSnapOnRelease()
            ->scrollbarHide(false)
            ->height(300)
            ->autoplay()
            ->effect(SwiperImageEntry::CARDS_EFFECT)
            ->cardsPerSlideOffset(2)
            ->autoplayDelay(500)
            ->centeredSlides()
            ->slidesPerView(2)
    ])
} 
```


## Widget

Create a class whatever u want. example ``App\Livewire\Widgets\Swipget`` and extends ``Rupadana\FilamentSwiper\Widgets\SwiperWidget``,

```php
<?php

namespace App\Livewire\Widgets;

use App\Livewire\Components\Feature;
use Rupadana\FilamentSwiper\Widgets\SwiperWidget;

class Swipget extends SwiperWidget
{

    public function getComponents(): array
    {
        return [
            // Your livewire component
        ];
    }
}

```

and register it to your Filament Provider




## Bugs

There is a bug. we need contributor to fix it. 

- [ ] Using effect on the modal (Infolists)

## Features

There is module has been implemented in this project.

- [x] Pagination
- [x] Navigation
- [x] Scrollbar
- [x] Autoplay
- [ ] Free Mode
- [ ] Grid
- [ ] Manipulation
- [ ] Parallax
- [x] Effect # Still have a bugs
- [ ] Lazy Loading
- [ ] Thumbs
- [ ] Zoom
- [ ] Keyboard Control
- [ ] Mousewheel Control
- [ ] Virtual Slides
- [ ] Hash Navigation
- [ ] Controller
- [ ] Accessibility

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rupadana](https://github.com/rupadana)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
