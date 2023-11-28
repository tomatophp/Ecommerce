<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoContactUsSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-phone";
    public ?string $description = "use it to show contact us in home page";

    public function label(): string
    {
        return __('Tomato Contact Us');
    }

    public function form(): string
    {
        return 'themes::sections.forms.contact';
    }

    public function section(): string
    {
        return 'themes::sections.contact';
    }

    public function config(): array
    {
        return [];
    }
}
