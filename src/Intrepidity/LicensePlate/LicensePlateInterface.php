<?php
namespace Intrepidity\LicensePlate;

interface LicensePlateInterface
{
    public function format();
    public function isValid();
}