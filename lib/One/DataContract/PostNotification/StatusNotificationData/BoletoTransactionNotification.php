<?php

namespace Gateway\One\DataContract\PostNotification\StatusNotificationData;

/**
 * Class BoletoTransactionNotification
 * @package Gateway\One\DataContract\PostNotification\StatusNotificationData
 */
class BoletoTransactionNotification
{
    /*@var [long] Amount in Cents */
    public $AmountInCents;
    /*@var [long] Amount paid in Cents */
    public $AmountPaidInCents;
    /*@var [DateTime] Boleto Expiration Date */
    public $BoletoExpirationDate;
    /*@var [long] gateway Intern number */
    public $NossoNumero;
    /*@var [DateTime] Status Changed Date */
    public $StatusChangedDate;
    /*@var [string] Transaction Key */
    public $TransactionKey;
    /*@var [string] Transaction Reference */
    public $TransactionReference;
    /*@var [string] Previous Boleto Transaction Status */
    public $PreviousBoletoTransactionStatus;
    /*@var [string] Boleto Transaction Status */
    public $BoletoTransactionStatus;
}