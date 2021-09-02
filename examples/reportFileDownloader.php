<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("https://api.mundipaggone.com");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    //Cria um objeto ApiClient
    $client = new Gateway\ApiClient();

    // Faz a chamada para criação
    $response = $client->DownloadTransactionReportFile('20150928', "C:\\Temp");

    // Imprime responsta
    print "<pre>";
    var_dump($response);
    print "</pre>";
}
catch (\Gateway\One\DataContract\Report\ApiError $error)
{
    // Imprime json
    print "<pre>";
    print ($error);
    print "</pre>";
}
catch (Exception $ex)
{
    // Imprime json
    print "<pre>";
    print ($ex);
    print "</pre>";
}