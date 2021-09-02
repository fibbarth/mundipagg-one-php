<?php
require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");
    
    //Cria um novo instantBuyData para que possa deletá-lo
     // Cria objeto requisição
    $request = new \Gateway\One\DataContract\Request\CreateInstantBuyDataRequest();
    
    $request
    ->setCreditCardBrand(\Gateway\One\DataContract\Enum\CreditCardBrandEnum::MASTERCARD)
    ->setCreditCardNumber("5555444433332222")
    ->setExpMonth(12)
    ->setExpYear(2030)
    ->setHolderName("gateway TESTE")
    ->setSecurityCode("999")
    ->setIsOneDollarAuthEnabled(true)
    ->getBillingAddress()
    ->setStreet("Rua da Quitanda")
    ->setNumber("199")
    ->setComplement("10º andar")
    ->setDistrict("Centro")
    ->setCity("Rio de Janeiro")
    ->setState("RJ")
    ->setZipCode("20091005")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);
    

    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();
    
    // Faz a chamada para criação
    $createCreditCard = $client->createCreditCard($request);
    
    // Faz a chamada para criação
    $deleteInstantBuyDataResponse = $client->deleteCreditCard($createCreditCard->getData()->InstantBuyKey);

    // Imprime responsta
    print "<pre>";
    print json_encode(array('success' => $deleteInstantBuyDataResponse->isSuccess(), 'data' => $deleteInstantBuyDataResponse->getData()), JSON_PRETTY_PRINT);
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

