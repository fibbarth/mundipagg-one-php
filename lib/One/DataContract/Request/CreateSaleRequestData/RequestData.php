<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class RequestData
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class RequestData extends BaseObject
{
    /**
     * @var string Categoria do ecommerce
     */
    protected $EcommerceCategory;

    /**
     * @var string Endereço IP do cliente
     */
    protected $IpAddress;

    /**
     * @var string Origem da requisição
     */
    protected $Origin;

    /**
     * @var string Identificador da sessão
     */
    protected $SessionId;

    /**
     * @return string
     */
    public function getEcommerceCategory()
    {
        return $this->EcommerceCategory;
    }

    /**
     * @param string $ecommerceCategory
     * @return $this
     */
    public function setEcommerceCategory($ecommerceCategory)
    {
        $this->EcommerceCategory = $ecommerceCategory;
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
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->IpAddress = $ipAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->Origin = $origin;

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
     * @param string $sessionId
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->SessionId = $sessionId;

        return $this;
    }
}