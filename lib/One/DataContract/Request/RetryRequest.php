<?php

namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class RetryRequest
 * @package Gateway\One\DataContract\Request
 */
class RetryRequest extends BaseObject
{
    /**
     * @var Identifica��o da requisi��o na plataforma One
     */
    protected $RequestKey;

    /**
     * @var Identifica��o da Ordem na plataforma One
     */
    protected $OrderKey;

    /**
     * @return RequestKey
     */
    public function getRequestKey()
    {
        return $this->RequestKey;
    }

    /**
     * @param $RequestKey
     * @return $this
     */
    public function setRequestKey($RequestKey)
    {
        $this->RequestKey = $RequestKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderKey()
    {
        return $this->OrderKey;
    }

    /**
     * @param string $OrderKey
     * @return $this
     */
    public function setOrderKey($OrderKey)
    {
        $this->OrderKey = $OrderKey;

        return $this;
    }

    /**
     * @var RetryRequestData\SaleCreditCardTransaction[] Cole��o de transa��es de cart�o de cr�dito das transa��es que ser�o retentadas
     */
    protected $RetrySaleCreditCardTransactionCollection;

    public function __contruct()
    {
        $this->RetrySaleCreditCardTransactionCollection = null;
    }

    /**
     * @return array|RetryRequestData\SaleCreditCardTransaction[]
     */
    public function getRetrySaleCreditCardTransactionCollection()
    {
        if (empty($this->RetrySaleCreditCardTransactionCollection)){
            $this->RetrySaleCreditCardTransactionCollection = array();
        }

        return $this->RetrySaleCreditCardTransactionCollection;
    }

    /**
     * @param RetryRequestData\RetrySaleCreditCardTransaction|null $retrySaleCreditCardTransaction
     * @return RetryRequestData\RetrySaleCreditCardTransaction
     */
    public function addRetrySaleCreditCardTransactionCollection(RetryRequestData\RetrySaleCreditCardTransaction $retrySaleCreditCardTransaction = null)
    {
        if ($retrySaleCreditCardTransaction == null){
            $retrySaleCreditCardTransaction = new RetryRequestData\RetrySaleCreditCardTransaction();
        }

        $this->RetrySaleCreditCardTransactionCollection[] = $retrySaleCreditCardTransaction;

        return $retrySaleCreditCardTransaction;
    }
}