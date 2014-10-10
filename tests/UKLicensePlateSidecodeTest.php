<?php
use Intrepidity\LicensePlate\UKLicensePlate;

class UKLicensePlateSidecodeTest extends PHPUnit_Framework_TestCase
{
    public function testSidecode1()
    {
        $licenseplate = new UKLicensePlate('BD51GMQ');
        $this->assertEquals($licenseplate->getSidecode(), 1);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('AK12GMCC');
        $this->assertFalse($licenseplate->getSidecode());
        $this->assertFalse($licenseplate->isValid());
    }

    public function testSidecodeNI()
    {
        $licenseplate = new UKLicensePlate('BD1234');
        $this->assertEquals($licenseplate->getSidecode(), 'NI');
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('BBD1234');
        $this->assertEquals($licenseplate->getSidecode(), 'NI');
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('1ia');
        $this->assertEquals($licenseplate->getSidecode(), 'NI2');
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('9999ia');
        $this->assertEquals($licenseplate->getSidecode(), 'NI2');
        $this->assertTrue($licenseplate->isValid());
    }
}