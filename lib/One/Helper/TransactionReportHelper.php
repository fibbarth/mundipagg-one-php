<?php

namespace Gateway\One\Helper;

use Gateway\One\DataContract\TransactionReport\TransactionReportData\TransactionReportCreditCardTransaction;
use Gateway\One\DataContract\TransactionReport\TransactionReportData\TransactionReportOrder;
use Gateway\One\DataContract\TransactionReport\TransactionReportData\Header;

class TransactionReportHelper
{
    /**
     * @param $headerLine
     * @return Header
     */
    public static function HeaderTransactionParser($headerLine)
    {
        $header = new Header();
        $header->setTransactionProcessedDate($headerLine[1])
            ->setReportFileCreateDate($headerLine[2])
            ->setVersion($headerLine[3]);

        return $header;
    }

    /**
     * @param $creditCardLine
     * @return TransactionReportCreditCardTransaction
     */
    public static function CreditCardTransactionParser($creditCardLine)
    {
        $creditCardTransaction = new TransactionReportCreditCardTransaction();
        $transactionReportOrder = new TransactionReportOrder();

        $transactionReportOrder->setOrderKey($creditCardLine[1])
            ->setOrderReference($creditCardLine[2])
            ->setMerchantKey($creditCardLine[3])
            ->setMerchantName($creditCardLine[4]);

        $creditCardTransaction->setOrder($transactionReportOrder);

        $creditCardTransaction->setTransactionKey($creditCardLine[5])
            ->setTransactionKeyToAcquirer($creditCardLine[6])
            ->setCreditCardTransactionReference($creditCardLine[7])
            ->setCreditCardBrand($creditCardLine[8])
            ->setCreditCardNumber($creditCardLine[9]);
        ($creditCardLine[10] == false) ? $creditCardTransaction->setInstallmentCount($creditCardLine[10]) : 0;
        $creditCardTransaction->setAcquirerName($creditCardLine[11])
            ->setStatus($creditCardLine[12]);
        ($creditCardLine[13] == false) ? $creditCardTransaction->setAmountInCents($creditCardLine[13]) : 0;
        ($creditCardLine[14] == false) ? $creditCardTransaction->setIataAmountInCents($creditCardLine[14]) : 0;
        $creditCardTransaction->setAuthorizationCode($creditCardLine[15])
            ->setTransactionIdentifier($creditCardLine[16])
            ->setUniqueSequentialNumber($creditCardLine[17]);
        ($creditCardLine[18] == false) ? $creditCardTransaction->setAuthorizedAmountInCents($creditCardLine[18]) : 0;
        ($creditCardLine[19] == false) ? $creditCardTransaction->setCapturedAmountInCents($creditCardLine[19]) : 0;
        ($creditCardLine[20] == false) ? $creditCardTransaction->setVoidedAmountInCents($creditCardLine[20]) : 0;
        ($creditCardLine[21] == false) ? $creditCardTransaction->setRefundedAmountInCents($creditCardLine[21]) : 0;
        $creditCardTransaction->setAcquirerAuthorizationReturnCode($creditCardLine[22]);
        ($creditCardLine[23] == false) ? $creditCardTransaction->setAuthorizedDate($creditCardLine[23]) : null;
        ($creditCardLine[24] == false) ? $creditCardTransaction->setCapturedDate($creditCardLine[24]) : null;
        ($creditCardLine[25] == false) ? $creditCardTransaction->setVoidedDate($creditCardLine[25]) : null;
        ($creditCardLine[26] == false) ? $creditCardTransaction->setLastProbeDate($creditCardLine[26]) : null;

        return $creditCardTransaction;
    }
}