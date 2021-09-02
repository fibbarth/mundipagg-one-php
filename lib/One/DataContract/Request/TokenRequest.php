<?php

namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Request\CreateSaleRequestData;

/**
 * Class TokenRequest
 * @package Gateway\One\DataContract\Request
 */

class TokenRequest extends BaseObject
{
    /**
     * @var TokenRequestData\TokenOrder Dados do pedido
     */
    protected $Order;

	/**
     * @var TokenRequestData\TokenOptions Opções do pedido
     */
    protected $Options;

	/**
     * @var CreateSaleRequestData\Buyer Dados do comprador
     */
    protected $Buyer;

    /**
     * @var CreateSaleRequestData\ShoppingCart Dados do carrinho de compras
     */
    protected $ShoppingCart;

	/**
     * @var TokenRequestData\TokenBoleto Dados para pagamento com boleto
     */
    protected $Boleto;

	/**
     * @var TokenRequestData\TokenCreditCard Dados para pagamento com cartão de crédito
     */
    protected $CreditCard;

    /**
     * @var TokenRequestData\TokenRequestData Dados da requisição
     */
    protected $RequestData;

    /**
     *
     */
    public function __construct()
    {
        $this->Order = null;
        $this->Options = null;
        $this->Buyer = null;
        $this->ShoppingCart = null;
        $this->Boleto = null;
        $this->CreditCard = null;
        $this->RequestData = null;
    }

    /**
     * @return TokenRequestData\TokenOrder
     */
    public function getOrder() {
    	if (empty($this->Order)) {
    		$this->Order = new TokenRequestData\TokenOrder();
    	}

		return $this->Order;

    }

    /**
     * @return TokenRequestData\TokenOptions
     */
    public function getOptions() {
    	if (empty($this->Options)) {
    		$this->Options = new TokenRequestData\TokenOptions();
    	}

		return $this->Options;

    }

    /**
     * @return CreateSaleRequestData\Buyer
     */
    public function getBuyer() {
    	if (empty($this->Buyer)) {
    		$this->Buyer = new CreateSaleRequestData\Buyer();
    	}

		return $this->Buyer;

    }

    /**
     * @return CreateSaleRequestData\ShoppingCart
     */
    public function getShoppingCart() {
    	if (empty($this->ShoppingCart)) {
    		$this->ShoppingCart = new CreateSaleRequestData\ShoppingCart();
    	}

		return $this->ShoppingCart;

    }

    /**
     * @return TokenRequestData\TokenBoleto
     */
    public function getBoleto() {
    	if (empty($this->Boleto)) {
    		$this->Boleto = new TokenRequestData\TokenBoleto();
    	}

		return $this->Boleto;

    }

    /**
     * @return TokenRequestData\TokenCreditCard
     */
    public function getCreditCard() {
    	if (empty($this->CreditCard)) {
    		$this->CreditCard = new TokenRequestData\TokenCreditCard();
    	}

		return $this->CreditCard;

    }

    /**
     * @return TokenRequestData\TokenRequestData
     */
    public function getRequestData() {
    	if (empty($this->RequestData)) {
    		$this->RequestData = new TokenRequestData\TokenRequestData();
    	}

		return $this->RequestData;

    }

}

