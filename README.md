Partner service for yii2
=====================
Partner server for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require --prefer-dist it-yakutia/yii2-partner "*"
```

or add

```json
"it-yakutia/yii2-partner": "*"
```

to the require section of your `composer.json` file.

Add migration path in your console config file:

```php
'controllerMap' => [
    ...
    'migrate' => [
    ...
        'migrationPath' => [
            ...
            '@vendor/it-yakutia/partner/src/migrations',
        ],
    ],
]

```
Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= Url::toRoute(['/partner/back/index']); ?>
```
Add RBAC roles:

```
partner
```

Add fixtures:
```sh
php yii fixture Partner --namespace='ityakutia\partner\tests\fixtures'
```

Add fixtures in docker:
```sh
php yii fixture Partner --namespace='ityakutia\partner\tests\fixtures' --interactive=0
```