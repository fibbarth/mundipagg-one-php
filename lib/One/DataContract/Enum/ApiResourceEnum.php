<?php

namespace Gateway\One\DataContract\Enum;

/**
 * Class ApiResourceEnum
 * @package Gateway\One\DataContract\Enum
 */
abstract class ApiResourceEnum
{
    const SALE = 'sale/';
    const CAPTURE = 'sale/capture';
    const CANCEL = 'sale/cancel';
    const RETRY = 'sale/retry';
    const QUERY = 'sale/query';
    const INSTANT_BUY_KEY = 'instantbuykey';
    const BUYER_KEY = 'buyerkey';
    const TOKEN = 'token/';
}