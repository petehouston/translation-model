# Translation Model

The [Waavi/translation](https://github.com/Waavi/translation) package is outdated and the author doesn't seem to work on it.
So I make this package in order to fix the problem when use this in Laravel 4.2.

**Note**: This should only works for Laravel 4.2 version, not for Laravel 5 since the **SoftDeletingTrait** is removed.


## Usage

Add this into your **composer.json**,

```
"require": {
    "petehouston/translation-model": "dev-master"
}
```

and run composer command to update the package.

```
$ composer update
```

You probably need to publish the configuration file from **Waavi/translation** package,

```
$ php artisan config:publish waavi/translation
```

Now edit the following part in **app/config/packages/waavi/translation/config.php**

```
/*
|--------------------------------------------------------------------------
| Language
|--------------------------------------------------------------------------
|
| Configuration specific to the language management component. You may extend
| the default models or implement their corresponding interfaces if you need to.
|
*/
'language'              =>  array(
    'model'     =>  'Language',
),
```

into this

```
/*
|--------------------------------------------------------------------------
| Language
|--------------------------------------------------------------------------
|
| Configuration specific to the language management component. You may extend
| the default models or implement their corresponding interfaces if you need to.
|
*/
'language'              =>  array(
    'model'     =>  'Petehouston\Models\Language',
),
```

Alright! You're ready to go.
