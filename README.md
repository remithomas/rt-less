rt-less
==========

Less Css for ZF2 php using http://lessphp.gpeasy.com https://github.com/oyejorge/less.php

---------------------------------------

# Installation
---------------------------------------
## How to install ?

### Using composer.json

```json
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "minimum-stability": "dev",
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "dev-master",
        "remithomas/rt-less": "dev-master"
    }
}
```

### Activate the module :

application.config.php
```php
<?php
return array(
    'modules' => array(
        'Application',
        'RtLess',
    )
);
?>
```

# Configuration

## Cache
Create a folder in your public directory, named "cache"

## config
move RtLess/config/rt-less.local.dist.php to your /config/autoload/rt-less.local.php
And config as you want


# Layout
<?php echo $this->lessCss("less/epragma/epragma.less"); ?>

# Thanks 
 - https://github.com/oyejorge/less.php
