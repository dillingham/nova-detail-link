<?php

namespace Dillingham\NovaDetailLink;

use Laravel\Nova\Nova;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Http\Requests\NovaRequest;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-detail-link', __DIR__.'/../dist/js/field.js');
        });

        Text::macro('detailLink', function () {
            if (null == resolve(NovaRequest::class)->resourceId) {
                $this->useComponent('nova-detail-link');
            }

            return $this;
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
