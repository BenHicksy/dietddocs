# Slim Framework



Slim is a PHP micro-framework that helps you quickly write simple yet powerful web applications and APIs.

## Installation
<a name="installation"></a>
<a href="#licence">Read more about licence!</a>

It's recommended that you use [Composer](https://getcomposer.org/) to install Slim.

```bash
$ composer require slim/slim
```

This will install Slim and all required dependencies. Slim requires PHP 5.5.0 or newer.

## Usage

Create an index.php file with the following contents:

```php
<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();
```

You may quickly test this using the built-in PHP server:
```bash
$ php -S localhost:8000
```

Going to http://localhost:8000/hello/world will now display "Hello, world".

For more information on how to configure your web server, see the [Documentation](http://www.slimframework.com/docs/start/web-servers.html).

## Tests

To execute the test suite, you'll need phpunit.

```bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Learn More

<a href="
Learn more at these links:

- [Website](http://www.slimframework.com)
- [Documentation](http://www.slimframework.com/docs/start/installation.html)
- [Support Forum](http://help.slimframework.com)
- [Twitter](https://twitter.com/slimphp)

## Security

If you discover security related issues, please email security@slimframework.com instead of using the issue tracker.

## Credits

- [Josh Lockhart](https://github.com/codeguy)
- [Andrew Smith](https://github.com/silentworks)
- [Rob Allen](https://github.com/akrabat)
- [Gabriel Manricks](https://github.com/gmanricks)
- [All Contributors](../../contributors)

## License
<a name="license"></a>
The Slim Framework is licensed under the MIT license. See [License File](LICENSE.md) for more information.
