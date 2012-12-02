SunraTurbosmsBundle
========================

Turbosms support for Symfony 2

Uses https://github.com/sunra/turbosms-soapgate-client-php



Intallation:

via Composer:



Add to your application's kernel:

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



Configuration:

add to /app/config/config.yml

``` yml 
sunra_turbosms:    
    charset: "%app_charset%"
    soap_client:
        login:    123456
        password: 123456
        sender:   123456
```      


