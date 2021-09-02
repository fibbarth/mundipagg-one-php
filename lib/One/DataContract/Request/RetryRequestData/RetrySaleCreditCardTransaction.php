<?php
/**
 * Created by PhpStorm.
 * User: Felippe
 * Date: 14/09/2015
 * Time: 14:54
 */

namespace Gateway\One\DataContract\Request\RetryRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class RetrySaleCreditCardTransaction
 * @package Gateway\One\DataContract\Request\RetryRequestData
 */
class RetrySaleCreditCardTransaction extends BaseObject
{
    /**
     * @var string C�digo de seguran�a do cart�o de cr�dito
     */
    protected $SecurityCode;

    /**
     * @var Guid Identificador da transa��o na plataforma One
     */
    protected $TransactionKey;

    /**
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }

    /**
     * @return Guid
     */
    public function getTransactionKey()
    {
        return $this->TransactionKey;
    }

    /**
     * @param $securityCode
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        $this->SecurityCode = $securityCode;

        return $this;
    }

    /**
     * @param $transactionKey
     * @return $this
     */
    public function setTransactionKey($transactionKey)
    {
        $this->TransactionKey = $transactionKey;

        return $this;
    }
}