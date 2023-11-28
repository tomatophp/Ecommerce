<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;

class TomatoHeaderSection extends Section
{
    public ?string $label = null;
    public ?string $group = "headers";
    public ?string $icon = "bx bx-menu";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Header');
    }

    public function form(): string
    {
        return 'themes::sections.forms.header';
    }

    public function section(): string
    {
        return 'themes::sections.header';
    }

    public function config(): array
    {
        return [];
    }
}
