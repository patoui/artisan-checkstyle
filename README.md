# artisan-checkstyle
Artisan command to run PHPCS against configured directories

Add the following to your composer.json:

```javascript
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/patoui/artisan-checkstyle"
    }
],
.
.
.
"require-dev": {
    "patoui/artisan-checkstyle": "^1.0"
},
```

Run composer update:

``` bash
composer update patoui/artisan-checkstyle
```

Add the following to your app.php providers:

```php
'providers' => [
.
.
.
PatOui\Checkstyle\CheckstyleServiceProvider::class,
]
```

Publish the config:

``` bash
php artisan vendor:publish --tag=checkstyle
```

Configure the config as needed

Run the command:

``` bash
php artisan checkstyle:run
```
