<?php
namespace Intrepidity\LicensePlate;

/**
 * Abstract base class for license plate classes
 *
 * Class AbstractLicensePlate
 * @package Intrepidity\LicensePlate
 */
abstract class AbstractLicensePlate
{
    /**
     * @var string License plate
     */
    protected $licenseplate;

    public function __construct($licenseplate)
    {
        $this->licenseplate = $licenseplate;
    }
}