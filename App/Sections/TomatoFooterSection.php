<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;

class TomatoFooterSection extends Section
{
    public ?string $label = null;
    public ?string $group = "footers";
    public ?string $icon = "bx bx-copyright";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Footer');
    }

    public function form(): string
    {
        return 'themes::sections.forms.footer';
    }

    public function section(): string
    {
        return 'themes::sections.footer';
    }

    public function config(): array
    {
        return [];
    }
}
