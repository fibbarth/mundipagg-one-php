<?php

namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class CreateSaleRequest
 * @package Gateway\One\DataContract\Request
 */
class CreateSaleRequest extends BaseObject
{
    /**
     * @var CreateSaleRequestData\CreditCardTransaction[] Coleção de transações de cartão de crédito
     */
    protected $CreditCardTransactionCollection;

    /**
     * @var CreateSaleRequestData\BoletoTransaction[] Coleção de transações de boleto
     */
    protected $BoletoTransactionCollection;

    /**
     * @var CreateSaleRequestData\Buyer Objeto com os dados do comprador
     */
    protected $Buyer;

    /**
     * @var CreateSaleRequestData\Merchant Identificação da loja
     */
    protected $Merchant;

    /**
     * @var CreateSaleRequestData\SaleOptions Configurações opcionais da transação
     */
    protected $Options;

    /**
     * @var CreateSaleRequestData\Order Dados do pedido
     */
    protected $Order;

    /**
     * @var CreateSaleRequestData\RequestData Dados adicionais da requisição
     */
    protected $RequestData;

    /**
     * @var CreateSaleRequestData\ShoppingCart[] Coleção de carrinhos de compra
     */
    protected $ShoppingCartCollection;

    /**
     *
     */
    public function __construct()
    {
        $this->CreditCardTransactionCollection = null;
        $this->BoletoTransactionCollection = null;
        $this->Buyer = null;
        $this->Merchant = null;
        $this->Options = null;
        $this->Order = null;
        $this->RequestData = null;
        $this->ShoppingCartCollection = null;
    }

    /**
     * @return CreateSaleRequestData\CreditCardTransaction[]
     */
    public function getCreditCardTransactionCollection()
    {
        if (empty($this->CreditCardTransactionCollection)){
            $this->CreditCardTransactionCollection = array();
        }

        return $this->CreditCardTransactionCollection;
    }

    /**
     * @param CreateSaleRequestData\CreditCardTransaction $creditCardTransaction
     * @return CreateSaleRequestData\CreditCardTransaction
     */
    public function addCreditCardTransaction(CreateSaleRequestData\CreditCardTransaction $creditCardTransaction = null)
    {
        if ($creditCardTransaction == null){
            $creditCardTransaction = new CreateSaleRequestData\CreditCardTransaction();
        }

        $this->CreditCardTransactionCollection[] = $creditCardTransaction;

        return $creditCardTransaction;
    }

    /**
     * @return CreateSaleRequestData\BoletoTransaction[]
     */
    public function getBoletoTransactionCollection()
    {
        if (empty($this->BoletoTransactionCollection)){
            $this->BoletoTransactionCollection = array();
        }

        return $this->BoletoTransactionCollection;
    }

    /**
     * @param CreateSaleRequestData\BoletoTransaction $boletoTransaction
     * @return CreateSaleRequestData\BoletoTransaction
     */
    public function addBoletoTransaction(CreateSaleRequestData\BoletoTransaction $boletoTransaction = null)
    {
        if ($boletoTransaction == null){
            $boletoTransaction = new CreateSaleRequestData\BoletoTransaction();
        }

        $this->BoletoTransactionCollection[] = $boletoTransaction;

        return $boletoTransaction;
    }

    /**
     * @return CreateSaleRequestData\Buyer
     */
    public function getBuyer()
    {
        if (empty($this->Buyer)){
            $this->Buyer = new CreateSaleRequestData\Buyer();
        }

        return $this->Buyer;
    }

    /**
     * @return CreateSaleRequestData\Merchant
     */
    public function getMerchant()
    {
        if (empty($this->Merchant)){
            $this->Merchant = new CreateSaleRequestData\Merchant();
        }

        return $this->Merchant;
    }

    /**
     * @return CreateSaleRequestData\SaleOptions
     */
    public function getOptions()
    {
        if (empty($this->Options)){
            $this->Options = new CreateSaleRequestData\SaleOptions();
        }

        return $this->Options;
    }

    /**
     * @return CreateSaleRequestData\Order
     */
    public function getOrder()
    {
        if (empty($this->Order)){
            $this->Order = new CreateSaleRequestData\Order();
        }

        return $this->Order;
    }

    /**
     * @return CreateSaleRequestData\RequestData
     */
    public function getRequestData()
    {
        if (empty($this->RequestData)){
            $this->RequestData = new CreateSaleRequestData\RequestData();
        }

        return $this->RequestData;
    }

    /**
     * @return CreateSaleRequestData\ShoppingCart[]
     */
    public function getShoppingCartCollection()
    {
        if (empty($this->ShoppingCartCollection)){
            $this->ShoppingCartCollection = array();
        }

        return $this->ShoppingCartCollection;
    }

    /**
     * @param CreateSaleRequestData\ShoppingCart $shoppingCart
     * @return CreateSaleRequestData\ShoppingCart
     */
    public function addShoppingCart(CreateSaleRequestData\ShoppingCart $shoppingCart = null)
    {
        if ($shoppingCart == null)
        {
            $shoppingCart = new CreateSaleRequestData\ShoppingCart();
        }

        $this->ShoppingCartCollection[] = $shoppingCart;

        return $shoppingCart;
    }
}