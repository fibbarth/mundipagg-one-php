<?php

namespace Gateway\One\DataContract\Enum;

/**
 * Class ApiMethodEnum
 * @package Gateway\One\DataContract\Enum
 */
abstract class ApiMethodEnum
{
    /**
     *
     */
    const GET = 'GET';

    /**
     *
     */
    const POST = 'POST';

    /**
     *
     */
    const PUT = 'PUT';

    /**
     *
     */
    const DELETE = 'DELETE';
    
    const PATCH = 'PATCH';
}