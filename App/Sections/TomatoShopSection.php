<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoShopSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-store";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Shop');
    }

    public function form(): string
    {
        return 'themes::sections.forms.shop';
    }

    public function section(): string
    {
        return 'themes::sections.shop';
    }

    public function config(): array
    {
        return [];
    }
}
