<?php
use Intrepidity\LicensePlate\UKLicensePlate;

class UKLicensePlateSidecodeTest extends PHPUnit_Framework_TestCase
{
    public function testSidecode1()
    {
        $licenseplate = new UKLicensePlate('BD1234');
        $this->assertEquals($licenseplate->getSidecode(), 1);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('AK12GMCC');
        $this->assertFalse($licenseplate->getSidecode());
        $this->assertFalse($licenseplate->isValid());
    }

    public function testSidecode2()
    {
        $licenseplate = new UKLicensePlate('AAA999');
        $this->assertEquals($licenseplate->getSidecode(), 2);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('AAA9');
        $this->assertEquals($licenseplate->getSidecode(), 2);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecode5()
    {
        $licenseplate = new UKLicensePlate('BD51GMQ');
        $this->assertEquals($licenseplate->getSidecode(), 5);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new UKLicensePlate('AK12GMCC');
        $this->assertFalse($licenseplate->getSidecode());
        $this->assertFalse($licenseplate->isValid());
    }
}