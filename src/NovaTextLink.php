<?php

namespace Dillingham\NovaTextLink;

use Laravel\Nova\Fields\Text;

class NovaTextLink extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-text-link';
}
