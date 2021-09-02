<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;


class TransactionReportCreditCardTransaction
{
    protected $Order;

    protected $TransactionKey;

    protected $TransactionKeyToAcquirer;

    protected $CreditCardTransactionReference;

    protected $CreditCardBrand;

    protected $CreditCardNumber;

    protected $InstallmentCount;

    protected $AcquirerName;

    protected $Status;

    protected $AmountInCents;

    protected $IataAmountInCents;

    protected $AuthorizationCode;

    protected $TransactionIdentifier;

    protected $UniqueSequentialNumber;

    protected $AuthorizedAmountInCents;

    protected $CapturedAmountInCents;

    protected $VoidedAmountInCents;

    protected $RefundedAmountInCents;

    protected $CapturedDate;

    protected $AuthorizedDate;

    protected $VoidedDate;

    protected $LastProbeDate;

    protected $AcquirerAuthorizationReturnCode;

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

    public function getTransactionKeyToAcquirer()
    {
        return $this->TransactionKeyToAcquirer;
    }

    public function setTransactionKeyToAcquirer($transactionKeyToAcquirer)
    {
        $this->TransactionKeyToAcquirer = $transactionKeyToAcquirer;

        return $this;
    }

    public function getCreditCardTransactionReference()
    {
        return $this->CreditCardTransactionReference;
    }

    public function setCreditCardTransactionReference($creditCardTransactionReference)
    {
        $this->CreditCardTransactionReference = $creditCardTransactionReference;

        return $this;
    }

    public function getCreditCardBrand()
    {
        return $this->CreditCardBrand;
    }

    public function setCreditCardBrand($creditCardBrand)
    {
        $this->CreditCardBrand = $creditCardBrand;

        return $this;
    }

    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }

    public function setCreditCardNumber($creditCardNumber)
    {
        $this->CreditCardNumber = $creditCardNumber;

        return $this;
    }

    public function getInstallmentCount()
    {
        return $this->InstallmentCount;
    }

    public function setInstallmentCount($installmentCount)
    {
        $this->InstallmentCount = $installmentCount;

        return $this;
    }

    public function getAcquirerName()
    {
        return $this->AcquirerName;
    }

    public function setAcquirerName($acquirerName)
    {
        $this->AcquirerName = $acquirerName;

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

    public function getIataAmountInCents()
    {
        return $this->IataAmountInCents;
    }

    public function setIataAmountInCents($iataAmountInCents)
    {
        $this->IataAmountInCents = $iataAmountInCents;

        return $this;
    }

    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }

    public function setAuthorizationCode($authorizationCode)
    {
        $this->AuthorizationCode = $authorizationCode;

        return $this;
    }

    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }

    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->TransactionIdentifier = $transactionIdentifier;

        return $this;
    }

    public function getUniqueSequentialNumber()
    {
        return $this->UniqueSequentialNumber;
    }

    public function setUniqueSequentialNumber($uniqueSequentialNumber)
    {
        $this->UniqueSequentialNumber = $uniqueSequentialNumber;

        return $this;
    }

    public function getAuthorizedAmountInCents()
    {
        return $this->AuthorizedAmountInCents;
    }

    public function setAuthorizedAmountInCents($authorizedAmountInCents)
    {
        $this->AuthorizedAmountInCents = $authorizedAmountInCents;

        return $this;
    }

    public function getCapturedAmountInCents()
    {
        return $this->CapturedAmountInCents;
    }

    public function setCapturedAmountInCents($capturedAmountInCents)
    {
        $this->CapturedAmountInCents = $capturedAmountInCents;

        return $this;
    }

    public function getVoidedAmountInCents()
    {
        return $this->VoidedAmountInCents;
    }

    public function setVoidedAmountInCents($voidedAmountInCents)
    {
        $this->VoidedAmountInCents = $voidedAmountInCents;

        return $this;
    }

    public function getRefundedAmountInCents()
    {
        return $this->RefundedAmountInCents;
    }

    public function setRefundedAmountInCents($refundedAmountInCents)
    {
        $this->RefundedAmountInCents = $refundedAmountInCents;

        return $this;
    }

    public function getCapturedDate()
    {
        return $this->CapturedDate;
    }

    public function setCapturedDate($capturedDate)
    {
        $this->CapturedDate = $capturedDate;

        return $this;
    }

    public function getAuthorizedDate()
    {
        return $this->AuthorizedDate;
    }

    public function setAuthorizedDate($authorizedDate)
    {
        $this->AuthorizedDate = $authorizedDate;

        return $this;
    }

    public function getVoidedDate()
    {
        return $this->VoidedDate;
    }

    public function setVoidedDate($voidedDate)
    {
        $this->VoidedDate = $voidedDate;

        return $this;
    }

    public function getLastProbeDate()
    {
        return $this->LastProbeDate;
    }

    public function setLastProbeDate($lastProbeDate)
    {
        $this->LastProbeDate = $lastProbeDate;

        return $this;
    }

    public function getAcquirerAuthorizationReturnCode()
    {
        return $this->AcquirerAuthorizationReturnCode;
    }

    public function setAcquirerAuthorizationReturnCode($acquirerAuthorizationReturnCode)
    {
        $this->AcquirerAuthorizationReturnCode = $acquirerAuthorizationReturnCode;

        return $this;
    }
}