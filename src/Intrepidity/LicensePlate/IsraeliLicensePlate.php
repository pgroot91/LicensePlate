<?php
namespace Intrepidity\LicensePlate;

class IsraeliLicensePlate extends AbstractLicensePlate implements LicensePlateInterface
{
     /**
     * Tests if the license plate is valid
     * The license plate is valid if the string contains 7 numeric characters (and dashes)
     *
     * @return bool
     */
    public function isValid()
    {
        $licenseplate = str_replace('-', '', $this->licenseplate);

        if(preg_match('/^[\d]{7}$/', $licenseplate))
        {
            return true;
        }
        return false;
    }

    /**
     * Format the license plate
     *
     * Example: will output 12-345-67 for input of 1234567
     *
     * @return string Formatted license plate
     */
    public function format()
    {
        $licenseplate = strtoupper(str_replace(array('-', '.'), '', $this->licenseplate));

        if(!$this->isValid())
        {
            return false;
        }

        return substr($licenseplate, 0, 2) . '-' . substr($licenseplate, 2, 3) . '-' . substr($licenseplate, 5, 2);
    }
}