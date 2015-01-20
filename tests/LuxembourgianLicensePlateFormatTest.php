<?php
use Intrepidity\LicensePlate\LuxembourgianLicensePlate;

class LuxembourgianLicensePlateFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $licenseplate = new LuxembourgianLicensePlate('A1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'A 1234');

        $licenseplate = new LuxembourgianLicensePlate('AB123');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'AB 123');

        $licenseplate = new LuxembourgianLicensePlate('AB1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'AB 1234');
    }
}