<?php

namespace Gateway\One\DataContract\Common;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class ManageCreditCardTransaction
 * @package Gateway\One\DataContract\Common
 */
class ManageCreditCardTransaction extends BaseObject
{
    /**
     * @var int Valor em centavos
     */
    protected $AmountInCents;

    /**
     * @var Identificação da transação na plataforma One
     */
    protected $TransactionKey;

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
     * @return Identificação
     */
    public function getTransactionKey()
    {
        return $this->TransactionKey;
    }

    /**
     * @param Identificação $transactionKey
     * @return $this
     */
    public function setTransactionKey($transactionKey)
    {
        $this->TransactionKey = $transactionKey;
        return $this;
    }
}