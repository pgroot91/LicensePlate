License plate validator and formatter
=====================================

This library can be used to validate and format license plate numbers.
Countries currently supported:

* Belgium (1971-now)
* The Netherlands (1951-now)

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
$licenseplate = new \Intrepidity\LicensePlate\DutchLicensePlate('08ttnp');
if($licenseplate->isValid())
{
    echo $licenseplate->format(); // Outputs 08-TT-NP in this case
}
```

Since the license plate classes for each country implement the LicensePlateInterface, they expose isValid() and format() methods.
Country-specific methods may also be available. Please check the code of the specific class to get the complete picture.

Please note that this library does not check if a license plate actually exists, not does it exclude combinations that aren't allowed.