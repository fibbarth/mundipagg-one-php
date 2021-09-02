<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Common\Address;
use Gateway\One\DataContract\Enum\CreditCardBrandEnum;

/**
 * Class CreditCard
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class CreditCard extends BaseObject
{
    /**
     * @var Address Endereço de cobrança do comprador.
     */
    protected $BillingAddress;

    /**
     * @var string Bandeira do cartão do comprador.
     */
    protected $CreditCardBrand;

    /**
     * @var string Número do cartão do comprador. Informar apenas os números do cartão.
     */
    protected $CreditCardNumber;

    /**
     * @var int Mês de expiração do cartão.
     */
    protected $ExpMonth;

    /**
     * @var int Ano de expiração do cartão.
     */
    protected $ExpYear;

    /**
     * @var string Nome do portador do cartão.
     */
    protected $HolderName;

    /**
     * @var string Token criado na gateway que representa o ‘Cartão de Crédito’ utilizado previamente pelo cliente.
     */
    protected $InstantBuyKey;

    /**
     * @var string Código de segurança do cartão.
     */
    protected $SecurityCode;

    public function __construct()
    {
        $this->BillingAddress = null;
        $this->CreditCardBrand = null;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        if (empty($this->BillingAddress)){
            $this->BillingAddress = new Address();
        }

        return $this->BillingAddress;
    }

    /**
     * @return CreditCardBrandEnum
     */
    public function getCreditCardBrand()
    {
        return $this->CreditCardBrand;
    }

    /**
     * @param string $creditCardBrand
     * @return $this
     */
    public function setCreditCardBrand($creditCardBrand)
    {
        $this->CreditCardBrand = $creditCardBrand;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }

    /**
     * @param string $creditCardNumber
     * @return $this
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->CreditCardNumber = $creditCardNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }

    /**
     * @param int $expMonth
     * @return $this
     */
    public function setExpMonth($expMonth)
    {
        $this->ExpMonth = $expMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }

    /**
     * @param int $expYear
     * @return $this
     */
    public function setExpYear($expYear)
    {
        $this->ExpYear = $expYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getHolderName()
    {
        return $this->HolderName;
    }

    /**
     * @param string $holderName
     * @return $this
     */
    public function setHolderName($holderName)
    {
        $this->HolderName = $holderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstantBuyKey()
    {
        return $this->InstantBuyKey;
    }

    /**
     * @param string $instantBuyKey
     * @return $this
     */
    public function setInstantBuyKey($instantBuyKey)
    {
        $this->InstantBuyKey = $instantBuyKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }

    /**
     * @param string $securityCode
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        $this->SecurityCode = $securityCode;

        return $this;
    }
}