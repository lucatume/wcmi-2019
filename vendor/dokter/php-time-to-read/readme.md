# PHP Time To Read

[![Latest Stable Version](https://poser.pugx.org/dokter/php-time-to-read/v/stable)](https://packagist.org/packages/dokter/php-time-to-read)

This package lets you easily calculate the estimated reading time for a string of content.

## Installation

You can install the package via composer:

```
composer require dokter/php-time-to-read
```

## Usage

Default WPM is 225

```php
$timeToRead = new TimeToRead($text);

Get the time in minutes:
$readingTime->getMinutes();

Get the time in seconds:
$timeToRead->getSeconds();

Or set a custom words per minute:
$timeToRead->setWordsPerMinute(275)->minutes();
```