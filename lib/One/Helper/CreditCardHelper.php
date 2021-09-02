<?php

namespace Gateway\One\Helper;

use Gateway\One\DataContract\Enum\CreditCardBrandEnum;
use Gateway\One\DataContract\Report\CreditCardError;
use Gateway\One\DataContract\Request\CreateSaleRequestData\CreditCard;

/**
 * Class CreditCardHelper
 * @package Gateway\One\Helper
 */
abstract class CreditCardHelper
{
    /**
     * Obtém a bandeira do cartão a partir do número
     * @param string $number Número do cartão
     * @return string Bandeira do cartão
     */
    public static function getBrandByNumber($number)
    {
        // Extrai somente números do cartão
        $number = preg_replace("/[^0-9a-zA-Z ]/", "", $number);

        if (preg_match('/^(401178|401179|431274|438935|451416|457393|457631|457632|504175|627780|636297|636368|(506699|5067[0-6]\d|50677[0-8])|(50900\d|5090[1-9]\d|509[1-9]\d{2})|65003[1-3]|(65003[5-9]|65004\d|65005[0-1])|(65040[5-9]|6504[1-3]\d)|(65048[5-9]|65049\d|6505[0-2]\d|65053[0-8])|(65054[1-9]|6505[5-8]\d|65059[0-8])|(65070\d|65071[0-8])|65072[0-7]|(65090[1-9]|65091\d|650920)|(65165[2-9]|6516[6-7]\d)|(65500\d|65501\d)|(65502[1-9]|6550[3-4]\d|65505[0-8]))[0-9]{10,12}/', $number))
        {
            return CreditCardBrandEnum::ELO;
        }
        elseif (substr($number, 0, 4) == '6011' || substr($number, 0, 3) == '622' || in_array(substr($number, 0, 2), array('64', '65')))
        {
            return CreditCardBrandEnum::DISCOVER;
        }
        elseif (in_array(substr($number, 0, 3), array('301', '305')) || in_array(substr($number, 0, 2), array('36', '38')))
        {
            return CreditCardBrandEnum::DINERS;
        }
        elseif (in_array(substr($number, 0, 2), array('34', '37')))
        {
            return CreditCardBrandEnum::AMEX;
        }
        elseif (substr($number, 0, 2) == '50')
        {
            return CreditCardBrandEnum::AURA;
        }
        elseif (in_array(substr($number, 0, 2), array('38', '60')))
        {
            return CreditCardBrandEnum::HIPERCARD;
        }
        elseif ($number[0] == '4')
        {
            return CreditCardBrandEnum::VISA;
        }
        elseif ($number[0] == '5' || $number[0] == '2')
        {
            return CreditCardBrandEnum::MASTERCARD;
        }
        else
        {
            return null;
        }
    }

    /**
     * @param $number
     * @param $name
     * @param $expiry
     * @param $cvc
     * @return CreditCard
     * @throws CreditCardError
     */
    public static function createCreditCard($number, $name, $expiry, $cvc)
    {
        if (empty($number)) {
            throw new CreditCardError("Invalid credit card number.", "number");
        }

        if (empty($name)) {
            throw new CreditCardError("Invalid credit card holder name.", "holderName");
        }

        if (empty($cvc)) {
            throw new CreditCardError("Invalid credit card security code.", "securityCode");
        }

        // Verifica se foi enviado uma barra
        if (empty($expiry) || stristr($expiry, '/') === false) {
            throw new CreditCardError("Invalid credit card expiration date.", "expirationDate");
        }

        // Separa mes e ano da data de validade do cartão
        $expiryParts = explode('/', trim($expiry));
        $expMonth = @trim($expiryParts[0]);
        $expYear = @trim($expiryParts[1]);

        // Verifica se o mês é válido
        if ($expMonth < 1 || $expMonth > 12) {
            throw new CreditCardError("Invalid credit card expiration month.", "expirationMonth");
        }

        // Verifica se o ano é válido
        if (!in_array(strlen($expYear), array(2, 4))) {
            throw new CreditCardError("Invalid credit card expiration year.", "expirationYear");
        }

        // Extrai somente números
        $number = str_replace(array('-', '+'), '', filter_var($number, FILTER_SANITIZE_NUMBER_INT));
        $cvc = str_replace(array('-', '+'), '', filter_var($cvc, FILTER_SANITIZE_NUMBER_INT));

        // Valida número do cartão
        if (strlen($number) < 10 || strlen($number) > 24){
            throw new CreditCardError("Invalid credit card number.", "number");
        }

        // Obtém a bandeira do cartão
        $creditCardBrand = self::getBrandByNumber($number);

        // Valida a bandeira
        if ($creditCardBrand == null) {
            throw new CreditCardError("Invalid credit card brand.", "brand");
        }

        // Sanitiza o nome
        $name = filter_var(trim($name), FILTER_SANITIZE_STRING);

        // Cria um objeto de cartão de crédito
        $creditCard = new CreditCard();
        $creditCard->setCreditCardBrand($creditCardBrand);
        $creditCard->setHolderName($name);
        $creditCard->setCreditCardNumber($number);
        $creditCard->setExpMonth($expMonth);
        $creditCard->setExpYear($expYear);
        $creditCard->setSecurityCode($cvc);

        // Devolve o cartão
        return $creditCard;
    }
}
