<?php

namespace Gateway\One\DataContract\Report;

/**
 * Class CreditCardError
 */
class CreditCardError extends \Exception
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $field;

    /**
     * @param string $message
     * @param string $field
     */
    function __construct($message, $field)
    {
        $this->message = $message;
        $this->field = $field;
    }
}