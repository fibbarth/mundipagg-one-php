<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class TokenBoleto
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenBoleto extends BaseObject
{

    /**
     * @var string Texto do campo "Instruções" do boleto
     */
    protected $Instructions;

    /**
     * @var string Número do Boleto
     */
    protected $DocumentNumber;

    /**
     * @var int Dias para adicionar à data atual ao computar a data de vencimento do boleto
     */
    protected $DaysToAddInBoletoExpirationDate;

	/**
     * @var string Número do banco
     */
    protected $BankNumber;

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param $Instructions
     * @return $this
     */
    public function setInstructions($Instructions)
    {
        $this->Instructions = $Instructions;

		return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param $DocumentNumber
     * @return $this
     */
    public function setDocumentNumber($DocumentNumber)
    {
        $this->DocumentNumber = $DocumentNumber;

		return $this;
    }

    /**
     * @return int
     */
    public function getDaysToAddInBoletoExpirationDate()
    {
        return $this->DaysToAddInBoletoExpirationDate;
    }

    /**
     * @param $DaysToAddInBoletoExpirationDate
     * @return $this
     */
    public function setDaysToAddInBoletoExpirationDate($DaysToAddInBoletoExpirationDate)
    {
        $this->DaysToAddInBoletoExpirationDate = $DaysToAddInBoletoExpirationDate;

		return $this;
    }

    /**
     * @return string
     */
    public function getBankNumber()
    {
        return $this->BankNumber;
    }

    /**
     * @param $BankNumber
     * @return $this
     */
    public function setBankNumber($BankNumber)
    {
        $this->BankNumber = $BankNumber;

		return $this;
    }

}