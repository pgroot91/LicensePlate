<?php
namespace Intrepidity\LicensePlate;

/**
 * UK license plate formatted and utilities
 *
 * Class UKLicensePlate
 * @package Intrepidity\LicensePlate
 */
class UKLicensePlate extends AbstractLicensePlate implements LicensePlateInterface
{
    /**
     * Get the sidecode of the license plate
     *
     * More info: http://nl.wikipedia.org/wiki/Nederlands_kenteken#Alle_sidecodes (in Dutch)
     *
     * @return bool|int|string
     */
    public function getSidecode()
    {
        $licenseplate = strtoupper(str_replace('-', '', $this->licenseplate));
        $sidecodes = array();
        $sidecodes['NI'] = '/^[\d]{1,4}[a-zA-Z]{2}$/';            // Northern Ireland 1958-1985

        // Normal sidecodes
        $sidecodes[1] = '/^[a-zA-Z]{1,2}[\d]{1,4}$/';             // A(A) 9999; 1903-1932
        $sidecodes[2] = '/^[a-zA-Z]{3}[\d]{1,4}$/';               // XXX 999; 1932-1963 and Northern Ireland 1985-now
        //$sidecodes[3] = '';                                     // 1963-1982; to be implemented
        //$sidecodes[4] = '';                                     // 1982-2001; to be implemented
        $sidecodes[5] = '/^[a-zA-Z]{2}[\d]{2}[a-zA-Z]{3}$/';      // XX99 XXX; 2001-now

        return $this->checkPatterns($sidecodes, $licenseplate);
    }

    /**
     * Format the license plate
     *
     * Example: will output 08-TT-NP for input of 08ttnp
     *
     * @param int $sidecode Optional input of sidecode. Automatically determined if omitted
     * @return string Formatted license plate
     */
    public function format($sidecode = 0)
    {
        if($sidecode === 0)
        {
            $sidecode = $this->getSidecode();
        }

        if(false === $sidecode)
        {
            return false;
        }

        $licenseplate = strtoupper(str_replace('-', '', $this->licenseplate));

        switch($sidecode)
        {
            case 1:
                preg_match('/^([a-zA-Z]{1,2})([\d]{1,4})$/', $licenseplate, $parts);
                return $parts[1] . ' ' . $parts[2];
                break;

            case 2:
                return substr($licenseplate, 0, 3) . ' ' . substr($licenseplate, 3);
                break;

            case 5:
                return substr($licenseplate, 0, 4) . ' ' . substr($licenseplate, 4, 3);
                break;

            case 'NI':
                preg_match('/^([\d]{1,4})([a-zA-Z]{2})$/', $licenseplate, $parts);
                return $parts[1] . ' ' . $parts[2];
                break;
        }

        return $licenseplate;
    }

    /**
     * Tests if the license plate is valid
     * The license plate is valid if the sidecode can be determined
     *
     * @return bool
     */
    public function isValid()
    {
        return $this->getSidecode() != false;
    }
}
