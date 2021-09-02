<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;


class TransactionReportBoletoTransaction
{
    protected $Order;

    protected $TransactionKey;

    protected $TransactionReference;

    protected $Status;

    protected $NossoNumero;

    protected $BankNumber;

    protected $Agency;

    protected $Account;

    protected $BarCode;

    protected $ExpirationDate;

    protected $AmountInCents;

    protected $AmountPaidInCents;

    protected $PaymentDate;

    protected $CreditDate;

    public function getOrder()
    {
        return $this->Order;
    }

    public function setOrder($order)
    {
        $this->Order = $order;

        return $this;
    }

    public function getTransactionKey()
    {
        return $this->TransactionKey;
    }

    public function setTransactionKey($transactionKey)
    {
        $this->TransactionKey = $transactionKey;

        return $this;
    }

    public function getTransactionReference()
    {
        return $this->TransactionReference;
    }

    public function setTransactionReference($transactionReference)
    {
        $this->TransactionReference = $transactionReference;

        return $this;
    }

    public function getStatus()
    {
        return $this->Status;
    }

    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    public function getNossoNumero()
    {
        return $this->NossoNumero;
    }

    public function setNossoNumero($nossoNumero)
    {
        $this->NossoNumero = $nossoNumero;

        return $this;
    }

    public function getBankNumber()
    {
        return $this->BankNumber;
    }

    public function setBankNumber($bankNumber)
    {
        $this->BankNumber = $bankNumber;

        return $this;
    }

    public function getAgency()
    {
        return $this->Agency;
    }

    public function setAgency($agency)
    {
        $this->Agency = $agency;

        return $this;
    }

    public function getAccount()
    {
        return $this->Account;
    }

    public function setAccount($account)
    {
        $this->Account = $account;

        return $this;
    }

    public function getBarCode()
    {
        return $this->BarCode;
    }

    public function setBarCode($barCode)
    {
        $this->BarCode = $barCode;

        return $this;
    }

    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;

        return $this;
    }

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($amountInCents)
    {
        $this->AmountInCents = $amountInCents;

        return $this;
    }

    public function getAmountPaidInCents()
    {
        return $this->AmountPaidInCents;
    }

    public function setAmountPaidInCents($amountPaidInCents)
    {
        $this->AmountPaidInCents = $amountPaidInCents;

        return $this;
    }

    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }

    public function setPaymentDate($paymentDate)
    {
        $this->PaymentDate = $paymentDate;

        return $this;
    }

    public function getCreditDate()
    {
        return $this->CreditDate;
    }

    public function setCreditDate($creditDate)
    {
        $this->CreditDate = $creditDate;

        return $this;
    }

}