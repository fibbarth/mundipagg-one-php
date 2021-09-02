<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Enum;

/**
 * Class TokenCreditCard
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenCreditCard extends BaseObject
{

    /**
     * @var TokenInstallmentPlan[] Coleção de planos de parcelamento para cada bandeira
     */
    protected $InstallmentPlanCollection;

    /**
     * @var int Meio de pagamento que deve ser usado para a transação de cartão de crédito
     */
    protected $PaymentMethodCode;

    /**
     * @var Enum\CreditCardOperationEnum Indica a operação de cartão de crédito
     */
    protected $CreditCardOperation;

	/**
     * @var string Texto da fatura do cartão
     */
    protected $SoftDescriptorText;

    /**
     * @return TokenInstallmentPlan[]
     */
    public function getInstallmentPlanCollection()
    {
        if (empty($this->InstallmentPlanCollection)){
            $this->InstallmentPlanCollection = array();
        }

        return $this->InstallmentPlanCollection;
    }

    /**
     * @param TokenInstallmentPlan $tokenInstallmentPlan
     * @return TokenInstallmentPlan
     */
    public function addInstallmentPlan(TokenInstallmentPlan $tokenInstallmentPlan = null)
    {
        if ($tokenInstallmentPlan == null){
            $tokenInstallmentPlan = new TokenInstallmentPlan();
        }

        $this->InstallmentPlanCollection[] = $tokenInstallmentPlan;

        return $tokenInstallmentPlan;
    }

    /**
     * @return int
     */
    public function getPaymentMethodCode()
    {
        return $this->PaymentMethodCode;
    }

    /**
     * @param int $PaymentMethodCode
     * @return $this
     */
    public function setPaymentMethodCode($PaymentMethodCode)
    {
        $this->PaymentMethodCode = $PaymentMethodCode;

        return $this;
    }

    /**
     * @return Enum\CreditCardOperationEnum
     */
    public function getCreditCardOperation()
    {
        return $this->CreditCardOperation;
    }

    /**
     * @param string $CreditCardOperation
     * @return $this
     */
    public function setCreditCardOperation($CreditCardOperation)
    {
        $this->CreditCardOperation = $CreditCardOperation;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptorText()
    {
        return $this->SoftDescriptorText;
    }

    /**
     * @param string $SoftDescriptorText
     * @return $this
     */
    public function setSoftDescriptorText($SoftDescriptorText)
    {
        $this->SoftDescriptorText = $SoftDescriptorText;

        return $this;
    }

}