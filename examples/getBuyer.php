<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();
    
    $request = new \Gateway\One\DataContract\Request\CreateBuyerRequest();
    
    $request
    ->setBirthdate(\DateTime::createFromFormat('d/m/Y', '11/05/1990'))
    ->setBuyerCategory(\Gateway\One\DataContract\Enum\BuyerCategoryEnum::PLUS)
    ->setBuyerReference("123456")
    ->setCreateDateInMerchant(new \DateTime())
    ->setDocumentNumber("58828172000138")
    ->setDocumentType(\Gateway\One\DataContract\Enum\DocumentTypeEnum::CNPJ)
    ->setEmail("comprador@gateway.com")
    ->setEmailType(\Gateway\One\DataContract\Enum\EmailTypeEnum::COMERCIAL)
    ->setFacebookId("1234567890")
    ->setGender(\Gateway\One\DataContract\Enum\GenderEnum::MALE)
    ->setHomePhone("3003-0460")
    ->setIpAddress("192.168.0.1")
    ->setLastBuyerUpdateInMerchant(new \DateTime())
    ->setMobilePhone("99999-8888")
    ->setName("Comprador Mundi")
    ->setPersonType(\Gateway\One\DataContract\Enum\PersonTypeEnum::COMPANY)
    ->setTwitterId("1234567890")
    ->setWorkPhone("99999-7777")
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
    //var_dump($request);exit;
    // Faz a chamada para criação
    $responseBuyer = $client->createBuyer($request);
    
    $response = $client->getBuyer($responseBuyer->getData()->BuyerKey); 
    
     // Imprime json
    print "<pre>";
    print json_encode($response->getData(), JSON_PRETTY_PRINT);
    print "</pre>";
	
} catch (\Gateway\One\DataContract\Report\ApiError $error)
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