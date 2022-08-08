<?php

namespace Elbgoods\NovaMapboxMarkerField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-mapbox-marker-field', __DIR__.'/../dist/js/field.js');
        });
    }
}
