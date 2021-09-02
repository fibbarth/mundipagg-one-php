<?php

namespace Gateway\One\DataContract\Report;

/**
 * Class ApiError
 * @package Gateway\One\DataContract\Report
 */
class ApiError extends \Exception
{
    /**
     * @var string HTTP Status Code
     */
    public $httpStatusCode;

    /**
     * @var Chave da requisição
     */
    public $requestKey;

    /**
     * @var string
     */
    public $responseBody;

    /**
     * @var array
     */
    public $errorCollection;

    /**
     * @var
     */
    public $requestQueryStringData;

    /**
     * @var
     */
    public $requestBodyData;

    /**
     * @param string $httpStatusCode
     * @param int $requestKey
     * @param \Exception $errorCollection
     * @param $requestQueryStringData
     * @param $requestBodyData
     * @param $responseBody
     */
    function __construct($httpStatusCode, $requestKey, $errorCollection, $requestQueryStringData, $requestBodyData, $responseBody)
    {
        $this->httpStatusCode = $httpStatusCode;
        $this->requestKey = $requestKey;
        $this->errorCollection = $errorCollection;
        $this->requestQueryStringData = $requestQueryStringData;
        $this->responseBody = $responseBody;
        $this->requestBodyData = $requestBodyData;
    }
}