<?php

namespace Gateway\One;

use Gateway\One\DataContract\Enum\CreditCardBrandEnum;
use Gateway\One\DataContract\Request\CreateSaleRequestData\CreditCard;
use Gateway\One\Helper\CreditCardHelper;

class CreditCardHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Gateway\One\DataContract\Report\CreditCardError
     */
    public function testCreateCreditCard_Failure()
    {
        CreditCardHelper::createCreditCard("", "", "", "");
    }

    public function testCreateCreditCard_Success()
    {
        $expected = new CreditCard();
        $expected->setCreditCardBrand(CreditCardBrandEnum::MASTERCARD);
        $expected->setCreditCardNumber("5555444433332222");
        $expected->setExpMonth(12);
        $expected->setExpYear(30);
        $expected->setHolderName("gateway");
        $expected->setSecurityCode("999");
        $creditCard = CreditCardHelper::createCreditCard(" 5555 4444 3333 2222 ", " gateway ", " 12/30 ", " 999 ");
        $this->assertEquals($expected, $creditCard);

        $expected->setExpYear(2030);
        $creditCard = CreditCardHelper::createCreditCard(" 5555 4444 3333 2222 ", " gateway ", " 12/2030 ", " 999 ");
        $this->assertEquals($expected, $creditCard);
    }

    /**
     * @dataProvider eloCreditCardNumbers
     */
    public function testCreateEloCreditCard_Success($creditCardNumber)
    {
        $creditCard = CreditCardHelper::createCreditCard($creditCardNumber, "FOO BAR", "10/2999", "123");
        $this->assertEquals($creditCard->getCreditCardBrand(), CreditCardBrandEnum::ELO);
    }

    public function eloCreditCardNumbers()
    {
        return [
            ["6500375776529289"],
            ["6507175689691637"],
            ["6507166749132449"],
            ["6500352340085643"],
            ["6500432908903922"],
            ["6505381431696963"],
            ["6500338068756598"],
            ["5066991998066856"],
            ["6362976992933317"],
            ["4011793791559338"]
        ];
    }
}