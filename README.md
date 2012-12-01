SunraTurbosmsBundle
========================

Turbosms support for Symfony 2

Uses https://github.com/sunra/turbosms-soapgate-client-php



Intallation:

via Composer:


after install:


Add the TurbosmsBundle to your application's kernel:

``` php
<?php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Sunra\TurbosmsBundle\SunraTurbosmsBundle(),
        // ...
    );
    ...
}
```

