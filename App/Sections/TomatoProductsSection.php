<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;

class TomatoProductsSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-cart";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Products');
    }

    public function form(): string
    {
        return 'themes::sections.forms.products-section';
    }

    public function section(): string
    {
        return 'themes::sections.products-section';
    }

    public function config(): array
    {
        return [];
    }
}
