<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class ShoppingCartItem
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class ShoppingCartItem extends BaseObject
{
    /**
     * @var string Descrição do produto
     */
    protected $Description;

    /**
     * @var int Valor total do desconto em centavos
     */
    protected $DiscountAmountInCents;

    /**
     * @var string Referência do produto no sistema da loja
     */
    protected $ItemReference;

    /**
     * @var string Nome do produto
     */
    protected $Name;

    /**
     * @var int Quantidade
     */
    protected $Quantity;

    /**
     * @var int Valor unitário em centavos
     */
    protected $UnitCostInCents;

    /**
     * @var int Valor total em centavos
     */
    protected $TotalCostInCents;

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param int $discountAmountInCents
     * @return $this
     */
    public function setDiscountAmountInCents($discountAmountInCents)
    {
        $this->DiscountAmountInCents = $discountAmountInCents;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountAmountInCents()
    {
        return $this->DiscountAmountInCents;
    }

    /**
     * @param $itemReference
     * @return $this
     */
    public function setItemReference($itemReference)
    {
        $this->ItemReference = $itemReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemReference()
    {
        return $this->ItemReference;
    }


    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param $totalCostInCents
     * @return $this
     */
    public function setTotalCostInCents($totalCostInCents)
    {
        $this->TotalCostInCents = $totalCostInCents;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCostInCents()
    {
        return $this->TotalCostInCents;
    }

    /**
     * @param $unitCostInCents
     * @return $this
     */
    public function setUnitCostInCents($unitCostInCents)
    {
        $this->UnitCostInCents = $unitCostInCents;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitCostInCents()
    {
        return $this->UnitCostInCents;
    }
}