<?php
/**
 * Copyright 2022 Vipps
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
namespace Vipps\Payment\GatewayEcomm\Data;

use Magento\Framework\DataObject;

/**
 * Class BillingDetails
 * @package Vipps\Payment\GatewayEcomm\Data
 */
class BillingDetails extends DataObject
{
    /**
     * @var string
     */
    const FIRST_NAME = 'firstName';
    /**
     * @var string
     */
    const LAST_NAME = 'lastName';
    /**
     * @var string
     */
    const EMAIL = 'email';
    /**
     * @var string
     */
    const PHONE_NUMBER = 'phoneNumber';
    /**
     * @var string
     */
    const STREET_ADDRESS = 'streetAddress';
    /**
     * @var string
     */
    const POSTAL_CODE = 'postalCode';
    /**
     * @var string
     */
    const CITY = 'city';
    /**
     * @var string
     */
    const COUNTRY = 'country';

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(self::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->getData(self::STREET_ADDRESS);
    }

    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->getData(self::POSTAL_CODE);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }
}
