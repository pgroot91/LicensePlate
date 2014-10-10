<?php
use Intrepidity\LicensePlate\UKLicensePlate;

class UKLicensePlateFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $licenseplate = new UKLicensePlate('bd51qmc');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'BD51 QMC');

        $licenseplate = new UKLicensePlate('bbd1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'BBD 1234');

        $licenseplate = new UKLicensePlate('bd1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'BD 1234');

        $licenseplate = new UKLicensePlate('1ia');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '1 IA');

        $licenseplate = new UKLicensePlate('9999ia');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '9999 IA');
    }
}