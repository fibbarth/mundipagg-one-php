<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class CreditCardTransaction
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class CreditCardTransaction extends BaseObject
{
    /**
     * @var int Valor total em centavos a ser passado na transação de cartão de crédito.
     */
    protected $AmountInCents;

    /**
     * @var CreditCard Objeto com os dados do cartão de crédito.
     */
    protected $CreditCard;

    /**
     * @var string Tipo da transação a ser realizada. Ex: AuthOnly.
     */
    protected $CreditCardOperation;

    /**
     * @var int Número de parcelas da transação.
     */
    protected $InstallmentCount;

    /**
     * @var CreditCardTransactionOptions Objeto com as configurações opcionais da transação.
     */
    protected $Options;

    /**
     * @var Recurrency Objeto com as configurações de um pagamento recorrente.
     */
    protected $Recurrency;

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
     * @return CreditCard
     */
    public function getCreditCard()
    {
        if (empty($this->CreditCard)){
            $this->CreditCard = new CreditCard();
        }

        return $this->CreditCard;
    }

    /**
     * @param \Gateway\One\DataContract\Request\CreateSaleRequestData\CreditCard $creditCard
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->CreditCard = $creditCard;
    }

    /**
     * @return string
     */
    public function getCreditCardOperation()
    {
        return $this->CreditCardOperation;
    }

    /**
     * @param string $creditCardOperation
     * @return $this
     */
    public function setCreditCardOperation($creditCardOperation)
    {
        $this->CreditCardOperation = $creditCardOperation;

        return $this;
    }

    /**
     * @return int
     */
    public function getInstallmentCount()
    {
        return $this->InstallmentCount;
    }

    /**
     * @param int $installmentCount
     * @return $this
     */
    public function setInstallmentCount($installmentCount)
    {
        $this->InstallmentCount = $installmentCount;

        return $this;
    }

    /**
     * @return CreditCardTransactionOptions
     */
    public function getOptions()
    {
        if (empty($this->Options)){
            $this->Options = new CreditCardTransactionOptions();
        }
        return $this->Options;
    }

    /**
     * @return Recurrency
     */
    public function getRecurrency()
    {
        if (empty($this->Recurrency)){
            $this->Recurrency = new Recurrency();
        }

        return $this->Recurrency;
    }

    /**
     * @param \Gateway\One\DataContract\Request\CreateSaleRequestData\Recurrency $recurrency
     */
    public function setRecurrency(Recurrency $recurrency)
    {
        $this->Recurrency = $recurrency;
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

    /**
     * @param int $paymentMethodCode
     * @return $this
     */
    public function setPaymentMethodCode($paymentMethodCode)
    {
        $this->getOptions()->setPaymentMethodCode($paymentMethodCode);

        return $this;
    }
}