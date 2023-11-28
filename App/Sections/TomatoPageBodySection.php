<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoPageBodySection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-text";
    public ?string $description = "use it to show page body in home page";

    public function label(): string
    {
        return __('Tomato Page Body');
    }

    public function form(): string
    {
        return '';
    }

    public function section(): string
    {
        return 'themes::sections.page-body';
    }

    public function config(): array
    {
        return [];
    }
}
