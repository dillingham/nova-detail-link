# Nova Detail Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-detail-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-detail-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-detail-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-detail-link)

Turns a text field into a detail link

![linked-text](https://user-images.githubusercontent.com/29180903/56322239-7de81200-6136-11e9-9ea0-c29f3254b2d7.png)

### Installation

```bash
composer require dillingham/nova-detail-link
```

### Usage

```php
use Laravel\Nova\Fields\Text;
```
```php
public function fields(Request $request)
{
    return [
        Text::make('Title')->detailLink(),
    ];
}
```
