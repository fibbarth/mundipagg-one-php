<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://stagingv2.mundipaggone.com");

    // Define a chave da loja
    //\Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");
    \Gateway\ApiClient::setMerchantKey("8A2DD57F-1ED9-4153-B4CE-69683EFADAD5");

    // Cria objeto requisição
    $tokenRequest = new \Gateway\One\DataContract\Request\TokenRequest();

    $tokenRequest->getOrder()
    ->setAmountInCents(100)
    ->setOrderReference(uniqid())
    ->setCheckoutAbandonUrl("http://mundipagg.com/abandon")
    ->setCheckoutReturnUrl("http://mundipagg.com/return")
    ->setExpirationTimeInMinutes(10)
    ->setIpAddress("192.168.0.1")
    ->setNotificationUrl("http://mundipagg.com/notification")
    ->setSessionId("12345");

    $tokenRequest->getBoleto()
    ->setInstructions("Não receber após o vencimento")
    ->setDocumentNumber(uniqid())
    ->setDaysToAddInBoletoExpirationDate(5)
    ->setBankNumber(\Gateway\One\DataContract\Enum\BankEnum::ITAU);

    $tokenRequest->getCreditCard()
    ->setCreditCardOperation(\Gateway\One\DataContract\Enum\CreditCardOperationEnum::AUTH_ONLY)
    ->setPaymentMethodCode(1)
    ->setSoftDescriptorText("Texto da fatura")
    ->addInstallmentPlan()
    ->setCreditCardBrand(1)//ARRUMAR
    ->addCreditCardInstallmentPlan()
    ->setInstallmentMin(1)
    ->setInstallmentMax(1)
    ->setOrderAmountInCentsMin(1);

    $tokenRequest->getOptions()
    ->enableBoletoPayment()
    ->enableCreditCardPayment()
    ->disableAntiFraud();

    $tokenRequest->getBuyer()
    ->setName("Comprador Mundi")
    ->setPersonType(\Gateway\One\DataContract\Enum\PersonTypeEnum::COMPANY)
    ->setBuyerReference("123456")
    ->setBuyerCategory(\Gateway\One\DataContract\Enum\BuyerCategoryEnum::PLUS)
    ->setDocumentNumber("58828172000138")
    ->setDocumentType(\Gateway\One\DataContract\Enum\DocumentTypeEnum::CNPJ)
    ->setEmail("comprador@gateway.com")
    ->setEmailType(\Gateway\One\DataContract\Enum\EmailTypeEnum::COMERCIAL)
    ->setGender(\Gateway\One\DataContract\Enum\GenderEnum::MALE)
    ->setHomePhone("(21)30030460")
    ->setMobilePhone("(21)999998888")
    ->setBirthDate(\DateTime::createFromFormat('d/m/Y', '11/05/1990'))
    ->setFacebookId("1234567890")
    ->setTwitterId("1234567890")
    ->setCreateDateInMerchant(new \DateTime())
    ->setLastBuyerUpdateInMerchant(new \DateTime())
    ->addAddress()
    ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::COMMERCIAL)
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    //var_dump($tokenRequest->getBuyer());

    // Carrinho de compras
    $shoppingCart = $tokenRequest->getShoppingCart();
    $shoppingCart->setDeliveryDeadline(new DateTime());
    $shoppingCart->setEstimatedDeliveryDate(new DateTime());
    $shoppingCart->setFreightCostInCents(199);
    $shoppingCart->setShippingCompany("Correios");
    $shoppingCart->getDeliveryAddress()
        ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::SHIPPING)
        ->setStreet("Rua da Quitanda")
        ->setNumber("199")
        ->setComplement("10º andar")
        ->setDistrict("Centro")
        ->setCity("Rio de Janeiro")
        ->setState("RJ")
        ->setZipCode("20091005")
        ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    $shoppingCart->addShoppingCartItem()
        ->setDescription("Apple iPhone 5s 16gb")
        ->setDiscountAmountInCents(160000)
        ->setItemReference("AI5S")
        ->setName("iPhone 5S")
        ->setQuantity(1)
        ->setUnitCostInCents(1800)
        ->setTotalCostInCents(1600);

    $shoppingCart->addShoppingCartItem()
        ->setDescription("TESTE")
        ->setDiscountAmountInCents(0)
        ->setItemReference("TESTE")
        ->setName("TESTE")
        ->setQuantity(2)
        ->setUnitCostInCents(1099)
        ->setTotalCostInCents(2198);

    $genericData = $tokenRequest->getRequestData()
    ->addGenericData()
    ->setName("Nome do Campo")
    ->setValue("Valor do campo");

    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();

    // Faz a chamada para criação
    $response = $client->createToken($tokenRequest);

    // Imprime resposta
    print "<pre>";
    print json_encode(array('success' => $response->isSuccess(), 'data' => $response->getData()), JSON_PRETTY_PRINT);
    print "</pre>";
}
catch (\Gateway\One\DataContract\Report\ApiError $error)
{
    // Imprime json
    print "<pre>";
    print json_encode($error, JSON_PRETTY_PRINT);
    print "</pre>";
}
catch (Exception $ex)
{

    // Imprime json
    print "<pre>";
    print json_encode($ex, JSON_PRETTY_PRINT);
    print "</pre>";
}