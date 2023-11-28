<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoPortfolioSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-image";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato Portfolio');
    }

    public function form(): string
    {
        return 'themes::sections.forms.projects';
    }

    public function section(): string
    {
        return 'themes::sections.projects';
    }

    public function config(): array
    {
        return [];
    }
}
