<?php
require_once("src/Intrepidity/LicensePlate/DutchLicensePlate.php");
use Intrepidity\LicensePlate\DutchLicensePlate;

class DutchLicensePlateFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $licenseplate = new DutchLicensePlate('10aaa1');
        $this->assertEquals($licenseplate->format(), '10-AAA-1');

        $licenseplate = new DutchLicensePlate('10AAA1');
        $this->assertEquals($licenseplate->format(), '10-AAA-1');

        $licenseplate = new DutchLicensePlate('10-AAA-1');
        $this->assertEquals($licenseplate->format(), '10-AAA-1');

        $licenseplate = new DutchLicensePlate('10-AAA1');
        $this->assertEquals($licenseplate->format(), '10-AAA-1');

        $licenseplate = new DutchLicensePlate('1-0-a-a-a-1');
        $this->assertEquals($licenseplate->format(), '10-AAA-1');
    }
}