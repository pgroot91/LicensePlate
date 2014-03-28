<?php
use Intrepidity\LicensePlate\IsraeliLicensePlate;

class IsraeliLicensePlateFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $licenseplate = new IsraeliLicensePlate('2952165');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '29-521-65');

        $licenseplate = new IsraeliLicensePlate('123456');
        $this->assertFalse($licenseplate->isValid());
        $this->assertFalse($licenseplate->format());

        $licenseplate = new IsraeliLicensePlate('123456a');
        $this->assertFalse($licenseplate->isValid());
        $this->assertFalse($licenseplate->format());
    }
}