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
            $request = resolve(NovaRequest::class);

            if (
                !$request->isCreateOrAttachRequest() &&
                !$request->isUpdateOrUpdateAttachedRequest() &&
                is_null($request->resourceId)) {
                $this->component = 'nova-detail-link';
            }

            return $this;
        });
        
        Text::macro('updateLink', function () {
            $request = resolve(NovaRequest::class);

            if (
                !$request->isCreateOrAttachRequest() &&
                !$request->isUpdateOrUpdateAttachedRequest() &&
                is_null($request->resourceId)) {
                $this->component = 'nova-update-link';
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
