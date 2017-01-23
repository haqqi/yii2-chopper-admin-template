Chopper Admin Template for Yii2
===============================

This project is limited use for internal of Haqqi's company. Initiated and developed by Muhammad Fauzil Haqqi on behalf of company PT Aku Peduli Indonesia and Pictalogi.com. Any other use is permitted without warranty and support from us.

This template might use a snippet from other template and get some inspirations from other code.

Installation
------------

### Asset Files and Dependencies

By default, Yii2 version 2.0 requires `fxp/composer-asset-plugin` to install it. The bad thing is, this plugin slows the `composer update` process. Also, I read in [one issue of Yii2](https://github.com/yiisoft/yii2/issues/8688) that this plugin will be abandoned in 2.1.

In order to use this template, you need to uninstall this plugin using command

```
composer global remove fxp/composer-asset-plugin

```

Because we try to avoid using `fxp/composer-asset-plugin`, we are using special `replace` command in composer. This `replace` will be handled by this extension. But to use this template, you need to provide the included `bower.json` and `.bowerrc` in your main project composer.

Then, in your main composer file, we suggest you to put:

```
"scripts": {
  "post-update-cmd": "bower update"
}
```

During development, because we suggest that you completely uninstall `fxp/composer-asset-plugin`, you need to put this line in your `composer.json` file:

```
"replace": {
  "bower-asset/typeahead.js": "*"
},
```

F.A.Q.
------

- Where is the rest of the documentation? In the `docs` folder of this repository.


Changelog
---------

```
2017-01-23
- Project started using previous code as basis
- Add README.md
```

