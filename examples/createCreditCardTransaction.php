<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    // Cria objeto requisição
    $request = new \Gateway\One\DataContract\Request\CreateSaleRequest();

    // Dados da transação de cartão de crédito
    $creditCardTransaction = new \Gateway\One\DataContract\Request\CreateSaleRequestData\CreditCardTransaction();
    $request->addCreditCardTransaction($creditCardTransaction);
    $creditCardTransaction
    ->setAmountInCents(100)
    ->setInstallmentCount(1)
    ->setCreditCardOperation(\Gateway\One\DataContract\Enum\CreditCardOperationEnum::AUTH_ONLY)
    ->setTransactionDateInMerchant(new DateTime())
    ->setTransactionReference(uniqid())
    ->getCreditCard()
    ->setCreditCardBrand(\Gateway\One\DataContract\Enum\CreditCardBrandEnum::MASTERCARD)
    ->setCreditCardNumber("5555444433332222")
    ->setExpMonth(12)
    ->setExpYear(2030)
    ->setHolderName("gateway TESTE")
    ->setSecurityCode("999")
    ->getBillingAddress()
    ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::BILLING)
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

    // Options do credit card transaction
    $creditCardTransaction->getOptions()
    ->setCurrencyIso(\Gateway\One\DataContract\Enum\CurrencyIsoEnum::BRL)
    ->setCaptureDelayInMinutes(0)
    ->setIataAmountInCents(0)
    ->setInterestRate(0)
    ->setPaymentMethodCode(\Gateway\One\DataContract\Enum\PaymentMethodEnum::SIMULATOR)
    ->setSoftDescriptorText("TESTE")
    ->setNotificationUrl("http://myurl.com")
    ->setIsNotificationEnabled(true);

    // Dados do comprador
    $request->getBuyer()
    ->setName("Comprador Mundi")
    ->setPersonType(\Gateway\One\DataContract\Enum\PersonTypeEnum::COMPANY)
    ->setBuyerReference("123456")
    ->setBuyerCategory(\Gateway\One\DataContract\Enum\BuyerCategoryEnum::PLUS)
    ->setDocumentNumber("58828172000138")
    ->setDocumentType(\Gateway\One\DataContract\Enum\DocumentTypeEnum::CNPJ)
    ->setEmail("comprador@gateway.com")
    ->setEmailType(\Gateway\One\DataContract\Enum\EmailTypeEnum::COMERCIAL)
    ->setGender(\Gateway\One\DataContract\Enum\GenderEnum::MALE)
    ->setHomePhone("3003-0460")
    ->setMobilePhone("99999-8888")
    ->setWorkPhone("99999-7777")
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

    $request->getMerchant()
    ->setMerchantReference("gateway LOJA 1");

    $request->getOptions()
    ->disableAntiFraud()
    // ->setAntiFraudServiceCode("123")
    ->setCurrencyIso(\Gateway\One\DataContract\Enum\CurrencyIsoEnum::BRL)
    ->setRetries(3);

    $request->getOrder()
    ->setOrderReference(uniqid());

    $request->getRequestData()
    ->setEcommerceCategory(\Gateway\One\DataContract\Enum\EcommerceCategoryEnum::B2B)
    ->setIpAddress("255.255.255.255")
    ->setOrigin("123")
    ->setSessionId(uniqid());

    // Carrinho de compras
    $shoppingCart = $request->addShoppingCart();
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

    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();

    // Faz a chamada para criação
    $response = $client->createSale($request);

    print "<pre>";
    print json_encode(array($request->getData()), JSON_PRETTY_PRINT);
    print "</pre>";

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