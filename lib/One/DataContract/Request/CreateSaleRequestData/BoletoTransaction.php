<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Common\Address;

/**
 * Class BoletoTransaction
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class BoletoTransaction extends BaseObject
{
    /**
     * @var int Valor do boleto em centavos
     */
    protected $AmountInCents;

    /**
     * @var string Número do banco
     */
    protected $BankNumber;

    /**
     * @var Address Endereço de cobrança do cliente.
     */
    protected $BillingAddress;

    /**
     * @var string Número de identificação do boleto.
     */
    protected $DocumentNumber;

    /**
     * @var string Instruções que serão impressas no boleto.
     */
    protected $Instructions;

    /**
     * @var BoletoTransactionOptions Configurações opcionais do boleto.
     */
    protected $Options;

    /**
     * @var string Objeto com as configurações de um pagamento recorrente.
     */
    protected $TransactionDateInMerchant;

    /**
     * @var string Identificação da transação na plataforma da loja.
     */
    protected $TransactionReference;

    /**
     *
     */
    public function __construct()
    {
        $this->Options = null;
    }

    /**
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    /**
     * @param int $amountInCents
     * @return $this
     */
    public function setAmountInCents($amountInCents)
    {
        $this->AmountInCents = $amountInCents;

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
     * @param string $bankNumber
     * @return $this
     */
    public function setBankNumber($bankNumber)
    {
        $this->BankNumber = $bankNumber;

        return $this;
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
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $documentNumber
     * @return $this
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->DocumentNumber = $documentNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $instructions
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->Instructions = $instructions;

        return $this;
    }

    /**
     * @return BoletoTransactionOptions
     */
    public function getOptions()
    {
        if (empty($this->Options)){
            $this->Options = new BoletoTransactionOptions();
        }

        return $this->Options;
    }

    /**
     * @return string
     */
    public function getTransactionDateInMerchant()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->TransactionDateInMerchant);
    }

    /**
     * @param \DateTime $transactionDateInMerchant
     * @return $this
     */
    public function setTransactionDateInMerchant(\DateTime $transactionDateInMerchant)
    {
        $this->TransactionDateInMerchant = $transactionDateInMerchant->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionReference()
    {
        return $this->TransactionReference;
    }

    /**
     * @param string $transactionReference
     * @return $this
     */
    public function setTransactionReference($transactionReference)
    {
        $this->TransactionReference = $transactionReference;

        return $this;
    }
}