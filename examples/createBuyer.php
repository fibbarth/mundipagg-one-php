<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://sandbox.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    // Cria objeto requisição
    $request = new \Gateway\One\DataContract\Request\CreateBuyerRequest();
    
    $request
    ->setBirthdate(\DateTime::createFromFormat('d/m/Y', '20/08/1990'))
    ->setBuyerCategory(\Gateway\One\DataContract\Enum\BuyerCategoryEnum::PLUS)
    ->setBuyerReference("C3PO")
    ->setCreateDateInMerchant(new \DateTime())
    ->setDocumentNumber("12345678901")
    ->setDocumentType(\Gateway\One\DataContract\Enum\DocumentTypeEnum::CPF)
    ->setEmail("lskywalker@r2d2.com")
    ->setEmailType(\Gateway\One\DataContract\Enum\EmailTypeEnum::PERSONAL)
    ->setFacebookId("1234567890")
    ->setGender(\Gateway\One\DataContract\Enum\GenderEnum::MALE)
    ->setHomePhone("(21)123456789")
    ->setLastBuyerUpdateInMerchant(new \DateTime())
    ->setMobilePhone("(21)987654321")
    ->setName("Luke Skywalker")
    ->setPersonType(\Gateway\One\DataContract\Enum\PersonTypeEnum::PERSON)
    ->setTwitterId("1234567890")
    ->setWorkPhone("(21)28467902")
    ->addAddress()
    ->setAddressType(\Gateway\One\DataContract\Enum\AddressTypeEnum::COMMERCIAL)
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
    
    //var_dump($request->getData());exit;

    // Faz a chamada para criação
    $response = $client->createBuyer($request);
        
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