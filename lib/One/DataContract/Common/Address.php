<?php

namespace Gateway\One\DataContract\Common;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class Address
 * @package Gateway\One\DataContract\Common
 */
class Address extends BaseObject
{
    /**
     * @var string Tipo do endereço
     */
    protected $AddressType;

    /**
     * @var string Logradouro
     */
    protected $Street;

    /**
     * @var string Número
     */
    protected $Number;

    /**
     * @var string Complemento do endereço
     */
    protected $Complement;

    /**
     * @var string Bairro
     */
    protected $District;

    /**
     * @var string Cidade
     */
    protected $City;

    /**
     * @var string Estado
     */
    protected $State;

    /**
     * @var string País
     */
    protected $Country;

    /**
     * @var string CEP
     */
    protected $ZipCode;

    /**
     * @param $addressType
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $this->AddressType = $addressType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
        return $this->AddressType;
    }


    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }


    /**
     * @param $complement
     * @return $this
     */
    public function setComplement($complement)
    {
        $this->Complement = $complement;

        return $this;
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->Complement;
    }

    /**
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }


    /**
     * @param $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->District = $district;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->District;
    }


    /**
     * @param $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param $state
     * @return $this
     */
    public function setState($state)
    {
        $this->State = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }


    /**
     * @param $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->Street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }


    /**
     * @param $zipCode
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
}