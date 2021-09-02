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

    // Dados da transação de boleto
    $boletoTransaction = new \Gateway\One\DataContract\Request\CreateSaleRequestData\BoletoTransaction();
    $request->addBoletoTransaction($boletoTransaction);
    $boletoTransaction
    ->setAmountInCents(199)
    ->setBankNumber(\Gateway\One\DataContract\Enum\BankEnum::ITAU)
    ->setDocumentNumber("1245")
    ->setInstructions("SR. CAIXA, FAVOR NÃO RECEBER APÓS VENCIMENTO.")
    ->setTransactionDateInMerchant(new DateTime())
    ->setTransactionReference(uniqid())
    ->getOptions()
    ->setCurrencyIso(\Gateway\One\DataContract\Enum\CurrencyIsoEnum::BRL)
    ->setDaysToAddInBoletoExpirationDate(5)
    ->setNotificationUrl("http://myurl.com")
    ->setIsNotificationEnabled(true);

    // Endereço de cobrança do comprador no do boleto
    $boletoTransaction->getBillingAddress()
    ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::BILLING)
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);

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

    $request->getMerchant()
    ->setMerchantReference("gateway LOJA 1");

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
    ->setDiscountAmountInCents(20000)
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