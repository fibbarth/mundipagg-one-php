<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class Options
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class SaleOptions extends BaseObject
{
    /**
     * @var string
     */
    protected $AntiFraudServiceCode;

    /**
     * @var string
     */
    protected $CurrencyIso;

    /**
     * @var bool
     */
    protected $IsAntiFraudEnabled;

    /**
     * @var int
     */
    protected $Retries;

    /**
     * @return string
     */
    public function getAntiFraudServiceCode()
    {
        return $this->AntiFraudServiceCode;
    }

    /**
     * @param string $antiFraudServiceCode
     * @return $this
     */
    public function setAntiFraudServiceCode($antiFraudServiceCode)
    {
        $this->AntiFraudServiceCode = $antiFraudServiceCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyIso()
    {
        return $this->CurrencyIso;
    }

    /**
     * @param string $currencyIso
     * @return $this
     */
    public function setCurrencyIso($currencyIso)
    {
        $this->CurrencyIso = $currencyIso;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsAntiFraudEnabled()
    {
        return $this->IsAntiFraudEnabled;
    }

    /**
     * @return $this
     */
    public function enableAntiFraud()
    {
        $this->IsAntiFraudEnabled = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function disableAntiFraud()
    {
        $this->IsAntiFraudEnabled = false;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetries()
    {
        return $this->Retries;
    }

    /**
     * @param int $retries
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->Retries = $retries;

        return $this;
    }
}