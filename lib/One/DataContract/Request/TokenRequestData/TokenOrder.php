<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class TokenOrder
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenOrder extends BaseObject
{
    /**
     * @var string Número do pedido no sistema do e-commerce
     */
    protected $OrderReference;

    /**
     * @var int Valor do pedido em centavos 
     */
    protected $AmountInCents;

    /**
     * @var string Identificação da sessão do usuário
     */
    protected $SessionId;

    /**
     * @var string Endereço IP da estação do comprador no momento da compra
     */
    protected $IpAddress;

    /**
     * @var string Url de retorno de sucesso de processamento
     */
    protected $CheckoutReturnUrl;

    /**
     * @var string Url para o post de notificação
     */
    protected $NotificationUrl;

    /**
     * @var string Url de redirecionamento para abandono do checkout
     */
    protected $CheckoutAbandonUrl;

    /**
     * @var int Tempo de expiração do token
     */
    protected $ExpirationTimeInMinutes;

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->OrderReference;
    }

    /**
     * @param string $OrderReference
     * @return $this
     */
    public function setOrderReference($OrderReference)
    {
        $this->OrderReference = $OrderReference;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    /**
     * @param int $AmountInCents
     * @return $this
     */
    public function setAmountInCents($AmountInCents)
    {
        $this->AmountInCents = $AmountInCents;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return $this
     */
    public function setSessionId($SessionId)
    {
        $this->SessionId = $SessionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->IpAddress;
    }

    /**
     * @param string $IpAddress
     * @return $this
     */
    public function setIpAddress($IpAddress)
    {
        $this->IpAddress = $IpAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutReturnUrl()
    {
        return $this->CheckoutReturnUrl;
    }

    /**
     * @param string $CheckoutReturnUrl
     * @return $this
     */
    public function setCheckoutReturnUrl($CheckoutReturnUrl)
    {
        $this->CheckoutReturnUrl = $CheckoutReturnUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationUrl()
    {
        return $this->NotificationUrl;
    }

    /**
     * @param string $NotificationUrl
     * @return $this
     */
    public function setNotificationUrl($NotificationUrl)
    {
        $this->NotificationUrl = $NotificationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutAbandonUrl()
    {
        return $this->CheckoutAbandonUrl;
    }

    /**
     * @param string $CheckoutAbandonUrl
     * @return $this
     */
    public function setCheckoutAbandonUrl($CheckoutAbandonUrl)
    {
        $this->CheckoutAbandonUrl = $CheckoutAbandonUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationTimeInMinutes()
    {
        return $this->ExpirationTimeInMinutes;
    }

    /**
     * @param string $ExpirationTimeInMinutes
     * @return $this
     */
    public function setExpirationTimeInMinutes($ExpirationTimeInMinutes)
    {
        $this->ExpirationTimeInMinutes = $ExpirationTimeInMinutes;

        return $this;
    }

}