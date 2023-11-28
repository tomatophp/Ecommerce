<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoPageTitleSection extends Section
{
    public ?string $label = null;
    public ?string $group = "headers";
    public ?string $icon = "bx bx-bold";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato Page Title');
    }

    public function form(): string
    {
        return 'themes::sections.forms.page-header';
    }

    public function section(): string
    {
        return 'themes::sections.page-header';
    }

    public function config(): array
    {
        return [];
    }
}
