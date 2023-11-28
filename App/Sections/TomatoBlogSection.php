<?php

namespace Themes\Ecommerce\App\Sections;

use TomatoPHP\TomatoThemes\Facades\TomatoThemes;
use TomatoPHP\TomatoForms\Facades\TomatoForms;
use TomatoPHP\TomatoForms\Services\Contracts\Form;
use TomatoPHP\TomatoForms\Services\Contracts\FormInput;
use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoBlogSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-paperclip";
    public ?string $description = "use it to show blogs in home page";

    public function label(): string
    {
        return __('Tomato Blog');
    }

    public function form(): string
    {
        return 'themes::sections.forms.blog';
    }

    public function section(): string
    {
        return 'themes::sections.blog';
    }

    public function config(): array
    {
        return [];
    }
}
