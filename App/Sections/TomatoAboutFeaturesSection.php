<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoAboutFeaturesSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-cheese";
    public ?string $description = "use it to show features in home page";

    public function label(): string
    {
        return __('Tomato About Features');
    }

    public function form(): string
    {
        return 'themes::sections.forms.about-features';
    }

    public function section(): string
    {
        return 'themes::sections.about-features';
    }

    public function config(): array
    {
        return [];
    }
}
