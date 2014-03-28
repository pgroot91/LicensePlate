License plate validator and formatter
=====================================

This library can be used to validate and format license plate numbers.
Countries currently supported:

* The Netherlands

Other countries will be added in the future

How to install
==============

Add the following to your composer.json:

``` json
{
    "require": {
        "intrepidity/license-plate": "dev-master"
    }
}
```

How to use
==========

Call the constructor of the license plate class of your choice with the user input as the first parameter:

``` php
<?php
$licenseplate = new DutchLicensePlate('08ttnp');
```

Since the license plate classes for each country implement the LicensePlateInterface, they expose isValid() and format() methods.
Country-specific methods may also be available. Please check the code of the specific class to get the complete picture.