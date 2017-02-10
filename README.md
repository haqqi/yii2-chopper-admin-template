Chopper Admin Template for Yii2
===============================

This project is limited use for internal of Haqqi's company. Initiated and developed by Muhammad Fauzil Haqqi on behalf of company PT Aku Peduli Indonesia and Pictalogi.com. Any other use is permitted without warranty and support from us.

This template might use a snippet from other template and get some inspirations from other code.

Installation
------------

### Asset Files and Dependencies

By default, Yii2 version 2.0 requires `fxp/composer-asset-plugin` to install it. The bad thing is, this plugin slows the `composer update` process. Also, I read in [one issue of Yii2](https://github.com/yiisoft/yii2/issues/8688) that this plugin will be abandoned in 2.1.

So we suggest you to uninstall this plugin using command:

```
composer global remove fxp/composer-asset-plugin

```

Then in your composer.json main project, put this line in the most top of `require` section:

```
"oomphinc/composer-installers-extender": "*"
```

Right now, the solution for faster dependency resolver is using asset packagist. So, put this line in the **same level** with `require` section:

```
"repositories": [
    {
        "type": "composer",
        "url": "https://asset-packagist.org"
    }
]
```

To ensure the bower and node library in the same place as Yii2 standard, put this as `extra` section:

```
"extra": {
    "installer-types": ["library"],
    "installer-paths": {
        "vendor/bower/{$name}/": ["vendor:bower-asset"],
        "vendor/npm/{$name}/": ["vendor:npm-asset"]
    }
}

```

> Note: You might still want to use fxp asset plugin? Yes you can use that. Just ignore the section above.

Finally, to install this template, put this line in the `require` section.


```
"haqqi/yii2-chopper-admin-template": "@dev"
```

#### Development Purpose

Since this project is still under development, we put this in local project. Therefore, there is a section like below in the `repositories` section.

```
{
    "type": "path",
    "url":  "./../yii2-extension/yii2-chopper-admin-template"
}

```

Which means, in order to develop this project also, you need to clone the repository (or fork it first), to the location relative to your main project with the correct folder name. For example:

```
main-project.dev (project that use this template)
yii-extension
|-- yii2-chopper-admin-template

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

