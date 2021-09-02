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

    // Faz a chamada para criação
    $response = $client->searchSaleByOrderKey("9aa2f7f2-2a69-4b9e-93ca-3ab866e26fb4");

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