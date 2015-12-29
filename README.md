# Crawler

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


Scan Http URLs from a url containing an HTML  and get Json or Xml or Array.

## Note 
Im not going to maintain this package, i didit just to learn how to create Composer Package. 

## Install

Via Composer

``` bash
$ composer require sohib/crawler
```

## Usage

``` php
use Sohib\Crawler;



$urls = [
    "http://thatsthefinger.com/",
    "http://just-shower-thoughts.tumblr.com/",
    "http://ducksarethebest.com/",
];
$crowler  = new Crawler\Scanner($urls);
$crowler->scan()->toArray(); // return urls as array 
$crowler->scan()->toJson();  // return urls as json
$crowler->scan()->toXml(); // return urls as Xml
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## Credits

- [Sohib Algotinel][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sohib/crawler.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[ico-downloads]: https://img.shields.io/packagist/dt/sohib/crawler.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/sohib/crawler

[link-downloads]: https://packagist.org/packages/sohib/crawler
[link-author]: https://github.com/sohib
[link-contributors]: ../../contributors
