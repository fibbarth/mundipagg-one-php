<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    // Cria objeto requisição
    $request = new \Gateway\One\DataContract\Request\CreateInstantBuyDataRequest();
    
    $request
    ->setCreditCardBrand(\Gateway\One\DataContract\Enum\CreditCardBrandEnum::MASTERCARD)
    ->setBuyerKey("460b3d1d-5c13-4f40-92db-36aa05729c79")
    ->setCreditCardNumber("4111111111111111")
    ->setExpMonth(10)
    ->setExpYear(22)
    ->setHolderName("LUKE SKYWALKER")
    ->setSecurityCode("999")
    ->setIsOneDollarAuthEnabled(false)
    ->getBillingAddress()
    ->setStreet("Mos Eisley Cantina")
    ->setNumber("123")
    ->setComplement("")
    ->setDistrict("Mos Eisley")
    ->setCity("Tatooine")
    ->setState("RJ")
    ->setZipCode("20001000")
    ->setCountry(\Gateway\One\DataContract\Enum\CountryEnum::BRAZIL);
        
    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient(); 
    
    // Faz a chamada para criação
    $response = $client->createCreditCard($request);
    
    
    // Imprime resposta
    print "<pre>";
    print json_encode($response->getData(), JSON_PRETTY_PRINT);
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
