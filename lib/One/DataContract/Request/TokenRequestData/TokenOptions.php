<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class TokenOptions
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenOptions extends BaseObject
{

    /**
     * @var boolean Indica se o pedido irá usar a análise antifraude
     */
    protected $IsAntiFraudEnabled;

    /**
     * @var boolean Indica se o pedido poderá ser processado com pagamento via cartão de crédito
     */
    protected $IsCreditCardPaymentEnabled;

    /**
     * @var boolean Indica se o pedido poderá ser processado com pagamento via boleto
     */
    protected $IsBoletoPaymentEnabled;

    /**
     * @return boolean
     */
    public function isAntiFraudEnabled()
    {
        return $this->IsAntiFraudEnabled;
    }
    /**
     * Habilita a análise de antifraude no pedido somente para transações de cartão de crédito
     * @return $this
     */
    public function enableAntiFraud()
    {
        $this->IsAntiFraudEnabled = true;
        return $this;
    }
    /**
     * Desabilita a análise de antifraude no pedido somente para transações de cartão de crédito
     * @return $this
     */
    public function disableAntiFraud()
    {
        $this->IsAntiFraudEnabled = false;
        return $this;
    }
    /**
     * @return boolean
     */
    public function isBoletoPaymentEnabled()
    {
        return $this->IsBoletoPaymentEnabled;
    }
    /**
     * Habilita o meio de pagamento por boleto bancário
     * @return $this
     */
    public function enableBoletoPayment()
    {
        $this->IsBoletoPaymentEnabled = true;
        return $this;
    }
    /**
     * Desabilita o meio de pagamento por boleto bancário
     * @return $this
     */
    public function disableBoletoPayment()
    {
        $this->IsBoletoPaymentEnabled = false;
        return $this;
    }
    /**
     * @return boolean
     */
    public function isCreditCardPaymentEnabled()
    {
        return $this->IsCreditCardPaymentEnabled;
    }
    /**
     * Habilita o meio de pagamento por cartão de crédito
     * @return $this
     */
    public function enableCreditCardPayment()
    {
        $this->IsCreditCardPaymentEnabled = true;
        return $this;
    }
    /**
     * Desabilita o meio de pagamento por cartão de crédito
     * @return $this
     */
    public function disableCreditCardPayment()
    {
        $this->IsCreditCardPaymentEnabled = false;
        return $this;
    }



}