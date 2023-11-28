<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoFAQSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-question-mark";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato FAQ');
    }

    public function form(): string
    {
        return 'themes::sections.forms.faq';
    }

    public function section(): string
    {
        return 'themes::sections.faq';
    }

    public function config(): array
    {
        return [];
    }
}
