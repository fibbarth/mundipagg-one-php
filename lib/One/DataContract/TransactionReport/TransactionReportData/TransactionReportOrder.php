<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;


class TransactionReportOrder
{
    protected $MerchantKey;

    protected $MerchantName;

    protected $OrderKey;

    protected $OrderReference;

    public function getMerchantKey()
    {
        return $this->MerchantKey;
    }

    public function setMerchantKey($merchantKey)
    {
        $this->MerchantKey = $merchantKey;

        return $this;
    }

    public function getMerchantName()
    {
        return $this->MerchantName;
    }

    public function setMerchantName($merchantName)
    {
        $this->MerchantName = $merchantName;

        return $this;
    }

    public function getOrderKey()
    {
        return $this->OrderKey;
    }

    public function setOrderKey($orderKey)
    {
        $this->OrderKey = $orderKey;

        return $this;
    }

    public function getOrderReference()
    {
        return $this->OrderReference;
    }

    public function setOrderReference($orderReference)
    {
        $this->OrderReference = $orderReference;

        return $this;
    }
}