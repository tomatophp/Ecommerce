<?php

namespace Themes\Ecommerce\App\Services;

use Themes\Ecommerce\App\Sections\TomatoCategorySection;
use Themes\Ecommerce\App\Sections\TomatoFeatureSection;
use Themes\Ecommerce\App\Sections\TomatoFooterSection;
use Themes\Ecommerce\App\Sections\TomatoHeaderSection;
use Themes\Ecommerce\App\Sections\TomatoHeroSection;
use Themes\Ecommerce\App\Sections\TomatoProductsSection;
use TomatoPHP\TomatoCms\Facades\TomatoCMS;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoThemes\Facades\TomatoThemes;

class TomatoEcommerceSectionsBuilder
{
    public static function build(): void
    {
        TomatoHeaderSection::build();
        TomatoHeroSection::build();
        TomatoCategorySection::build();
        TomatoProductsSection::build();
        TomatoFeatureSection::build();
        TomatoFooterSection::build();

        //Create Section Forms
        TomatoForms::build();
        TomatoCMS::build();
        TomatoThemes::build();
    }
}
