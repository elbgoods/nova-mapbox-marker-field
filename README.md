# Nova Mapbox Marker Field

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.1`

## Features

- Shows a dead simple geo marker based on latitude & longitude

## Installation

Install the package in a Laravel Nova project via Composer:

```bash
composer require elbgoods/nova-mapbox-marker-field
```

## Usage

Expect a mapbox access-token specified in `config/services.php`:

```php
<?php

return [
    'mapbox' => [
        'key' => env('MAPBOX_KEY', 'your-default-key'),
    ],
```

```php
use Elbgoods\NovaMapboxMarkerField\NovaMapboxMarkerField;

public function fields(Request $request)
{
    return [
        NovaMapboxMarkerField::make('Marker')
            ->longitude($this->longitude)
            ->latitude($this->latitude)
            ->zoom(8),
    ];
}
```

## Screenshot

![Detail View](docs/field.png)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE.md).
