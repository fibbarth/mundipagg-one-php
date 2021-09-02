<?php

namespace Gateway\One\DataContract\Enum;

/**
 * Class PersonTypeEnum
 * @package Gateway\One\DataContract\Enum
 */
abstract class PersonTypeEnum
{
    /**
     * Pessoa física
     */
    const PERSON = "Person";

    /**
     * Pessoa jurídica
     */
    const COMPANY = "Company";
}