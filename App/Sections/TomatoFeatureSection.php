<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;

class TomatoFeatureSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-rocket";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Feature');
    }

    public function form(): string
    {
        return 'themes::sections.forms.feature';
    }

    public function section(): string
    {
        return 'themes::sections.feature';
    }

    public function config(): array
    {
        return [];
    }
}
