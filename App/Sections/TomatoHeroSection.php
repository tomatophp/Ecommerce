<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;

class TomatoHeroSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-home";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Hero');
    }

    public function form(): string
    {
        return 'themes::sections.forms.hero';
    }

    public function section(): string
    {
        return 'themes::sections.hero';
    }

    public function config(): array
    {
        return [];
    }
}
