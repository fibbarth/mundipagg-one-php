<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;

/**
 * Class OnlineDebitTransaction
 * @package Gateway\One\DataContract\TransactionReport\TransactionReportData
 */
class OnlineDebitTransaction
{
    protected $Order;

    protected $TransactionKey;

    protected $TransactionReference;

    protected $Bank;

    protected $Status;

    protected $AmountInCents;

    protected $TransactionKeyToBank;

    protected $AmountPaidInCents;

    protected $Signature;

    protected $PaymentDate;

    protected $BankReturnCode;

    protected $BankPaymentDate;

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

    public function getBank()
    {
        return $this->Bank;
    }

    public function setBank($bank)
    {
        $this->Bank = $bank;

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

    public function getAmountInCents()
    {
        return $this->AmountInCents;
    }

    public function setAmountInCents($amountInCents)
    {
        $this->AmountInCents = $amountInCents;

        return $this;
    }

    public function getTransactionKeyToBank()
    {
        return $this->TransactionKeyToBank;
    }

    public function setTransactionKeyToBank($transactionKeyToBank)
    {
        $this->TransactionKeyToBank = $transactionKeyToBank;

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

    public function getSignature()
    {
        return $this->Signature;
    }

    public function setSignature($signature)
    {
        $this->Signature = $signature;

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

    public function getBankReturnCode()
    {
        return $this->BankReturnCode;
    }

    public function setBankReturnCode($bankReturnCode)
    {
        $this->BankReturnCode = $bankReturnCode;

        return $this;
    }

    public function getBankPaymentDate()
    {
        return $this->BankPaymentDate;
    }

    public function setBankPaymentDate($bankPaymentDate)
    {
        $this->BankPaymentDate = $bankPaymentDate;

        return $this;
    }
}