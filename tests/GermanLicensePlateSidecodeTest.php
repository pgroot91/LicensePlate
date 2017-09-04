<?php

use Intrepidity\LicensePlate\GermanLicensePlate;

class GermanLicensePlateSidecodeTest extends PHPUnit_Framework_TestCase
{
    public function testDistricts()
    {
        $licenseplate = new GermanLicensePlate('AANL900');
        $this->assertEquals($licenseplate->getSidecode(), 1);
        $this->assertTrue($licenseplate->isValid());


        $licenseplate = new GermanLicensePlate('BBX900');
        $this->assertEquals($licenseplate->getSidecode(), 1);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecodeP()
    {
        $licenseplate = new GermanLicensePlate('01');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_POLITICAL_HEADS);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('11');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_POLITICAL_HEADS);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('02');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_POLITICAL_HEADS);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('03');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_POLITICAL_HEADS);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('04');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_POLITICAL_HEADS);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecodeCD()
    {
        $licenseplate = new GermanLicensePlate('04422');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_CORPS_DIPLOMATIC);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('01337');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_CORPS_DIPLOMATIC);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('0133713');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_CORPS_DIPLOMATIC);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecodeAF()
    {
        $licenseplate = new GermanLicensePlate('ADVD1234');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_AMERICAN_FORCES);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('AFG123');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_AMERICAN_FORCES);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('HKA1');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_AMERICAN_FORCES);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('IFAG238');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_AMERICAN_FORCES);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecodeAG()
    {
        $licenseplate = new GermanLicensePlate('AGIR1337');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_SPECIAL_TRANSPORT);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('AGA9');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_SPECIAL_TRANSPORT);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecodeBG()
    {
        $licenseplate = new GermanLicensePlate('BG137');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_FEDERAL_POLICE);
        $this->assertTrue($licenseplate->isValid());

        $licenseplate = new GermanLicensePlate('BP133701');
        $this->assertEquals($licenseplate->getSidecode(), GermanLicensePlate::SIDE_CODE_FEDERAL_POLICE);
        $this->assertTrue($licenseplate->isValid());
    }
}