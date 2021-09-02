<?php

require_once(dirname(__FILE__) . '/../init.php');

try
{
    // Define a url utilizada
    \Gateway\ApiClient::setBaseUrl("url_here");

    // Define a chave da loja
    \Gateway\ApiClient::setMerchantKey("85328786-8BA6-420F-9948-5352F5A183EB");

    // Cria objeto requisição
    $createSaleRequest = new \Gateway\One\DataContract\Request\CreateSaleRequest();

    // Cria objeto do cartão de crédito
    $creditCard = \Gateway\One\Helper\CreditCardHelper::createCreditCard("5555 4444 3333 2222", "gateway", "12/2030", "999");

    // Define dados do pedido
    $createSaleRequest->addCreditCardTransaction()
        ->setPaymentMethodCode(\Gateway\One\DataContract\Enum\PaymentMethodEnum::SIMULATOR)
        ->setCreditCardOperation(\Gateway\One\DataContract\Enum\CreditCardOperationEnum::AUTH_ONLY)
        ->setAmountInCents(1098) // R$ 10,98
        ->setCreditCard($creditCard);
        ;

    //Cria um objeto ApiClient
    $apiClient = new Gateway\ApiClient();

    // Faz a chamada para criação
    $response = $apiClient->createSale($createSaleRequest);

    // Mapeia resposta
    $httpStatusCode = $response->isSuccess() ? 201 : 401;
    $response = array("message" => $response->getData()->CreditCardTransactionResultCollection[0]->AcquirerMessage, "data" => $response->getData());
}
catch (\Gateway\One\DataContract\Report\CreditCardError $error)
{
    $httpStatusCode = 400;
    $response = array("message" => $error->getMessage());
}
catch (\Gateway\One\DataContract\Report\ApiError $error)
{
    $httpStatusCode = $error->errorCollection->ErrorItemCollection[0]->ErrorCode;
    $response = array("message" => $error->errorCollection->ErrorItemCollection[0]->Description);
}
catch (\Exception $ex)
{
    $httpStatusCode = 500;
    $response = array("message" => "Ocorreu um erro inesperado.");
}
finally
{
    // Devolve resposta
    http_response_code($httpStatusCode);
    header('Content-Type: application/json');
    print json_encode($response, JSON_PRETTY_PRINT);
}