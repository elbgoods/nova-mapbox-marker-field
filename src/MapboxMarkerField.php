<?php

namespace Elbgoods\NovaMapboxMarkerField;

use Laravel\Nova\Fields\Field;

class MapboxMarkerField extends Field
{
    public $component = 'nova-mapbox-marker-field';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->withMeta(['accessToken' => config('services.mapbox.key')]);
    }

    public function zoom(int $zoom)
    {
        return $this->withMeta(['zoom' => $zoom]);
    }

    public function latitude($latitude)
    {
        return $this->withMeta(['latitude' => $latitude]);
    }

    public function longitude($longitude)
    {
        return $this->withMeta(['longitude' => $longitude]);
    }
}
