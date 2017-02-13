How to Use
==========

Setup & Configuration
---------------------

Because this project is basically a Yii2 extension, we design this so it can be run via Yii2 component scheme.

First thing first, you need to define new component in the application configuration:

```php
'components' => [
    'chopper' => [
        'class' => \haqqi\chopper\Chopper::className()
    ]
    // other component definitions
]
```

Layout
------

The default layout can be used by defining the layout in your controller:

```php
public $layout = '@haqqi/chopper/views/layouts/default';
```

Or alternatively, you can extend your Controller to `\haqqi\chopper\base\ChopperController`.


How to Run Development Environment
==================================

SASS Compiling
--------------

All sass files for this template is in the `sass` folder. As we all know, all files with no underscore `_` prefix will be compiled if we run the compile all command.

This project use nodejs and gulp as the tool to compile sass files. The script is inside `gulpfile.js`. Just run script below in the project root to execute the watcher:

```
npm run dev:activate
```

The target folder is `src/web/css`, so the Yii2 Asset Bundle will be able to use it.

Demo Pages
----------

All demo pages can be accessed by defining new module in the app configuration:

```php
'modules' => [
    'chopper' => \haqqi\chopper\Module::className()
],
```

The url prefix is `chopper`. All the demo pages can be accessed via menu. If you want to create a new demo page, just add it in the controller.
