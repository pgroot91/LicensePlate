<?php
use Intrepidity\LicensePlate\UKLicensePlate;

class UKLicensePlateFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $licenseplate = new UKLicensePlate('bd51qmc');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'BD51 QMC');
    }
}