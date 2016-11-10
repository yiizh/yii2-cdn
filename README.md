# yii2-cdn
A CDN extension for Yii2.

You can make your assets using CDN resources without changing your asset bundle code.

## Install
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiizh/yii2-cdn "*"
```

or add

```
"yiizh/yii2-cdn": "*"
```

to the require section of your `composer.json` file.

## Usage

### 1. Add a component

Add the following code to you config file `@app/config/main.php`:

```php
// ...
'components' => [
    'cdn' => 'yiizh\cdn\CDN',
    'asssets' => [
        [
            'class' => 'yii\web\JqueryAsset',
            'js' => [
                'http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js'
            ]
        ],
        [
            'class' => 'yii\bootstrap\BootstrapAsset',
            'js' => [
                'http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css'
            ]
        ],
    ]
]
...
```