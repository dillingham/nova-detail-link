# Nova Detail Link

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-detail-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-detail-link)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-detail-link.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-detail-link) [![Twitter Follow](https://img.shields.io/twitter/follow/im_brian_d?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/im_brian_d)

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
---


# Author

Hi 👋, Im Brian Dillingham, creator of this Nova package [and others](https://novapackages.com/collaborators/dillingham)

Hope you find it useful. Feel free to reach out with feedback.

Follow me on twitter: [@im_brian_d](https://twitter.com/im_brian_d) 
