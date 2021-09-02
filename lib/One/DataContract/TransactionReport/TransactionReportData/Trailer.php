<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;

/**
 * Class Trailer
 * @package Gateway\One\DataContract\TransactionReport\TransactionReportData
 */
class Trailer
{
    protected $OrderDataCount;

    protected $BoletoTransactionDataCount;

    protected $CreditCardTransactionDataCount;

    protected $OnlineDebitTransactionDataCount;

    public function getOrderDataCount()
    {
        return $this->OrderDataCount;
    }

    public function getBoletoTransactionDataCount()
    {
        return $this->BoletoTransactionDataCount;
    }

    public function getCreditCardTransactionDataCount()
    {
        return $this->CreditCardTransactionDataCount;
    }

    public function getOnlineDebitTransactionDataCount()
    {
        return $this->OnlineDebitTransactionDataCount;
    }

    public function setOrderDataCount($orderDataCount)
    {
        $this->OrderDataCount = $orderDataCount;

        return $this;
    }

    public function setBoletoTransactionDataCount($boletoTransactionDataCount)
    {
        $this->BoletoTransactionDataCount = $boletoTransactionDataCount;

        return $this;
    }

    public function setCreditCardTransactionDataCount($creditCardTransactionDataCount)
    {
        $this->CreditCardTransactionDataCount = $creditCardTransactionDataCount;

        return $this;
    }

    public function setOnlineDebitTransactionDataCount($OnlineDebitTransactionDataCount)
    {
        $this->OnlineDebitTransactionDataCount = $OnlineDebitTransactionDataCount;

        return $this;
    }
}