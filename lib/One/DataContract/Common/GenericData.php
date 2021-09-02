<?php

namespace Gateway\One\DataContract\Common;

use Gateway\One\DataContract\Common\BaseObject;

class GenericData extends BaseObject
{
    /**
     * @var string Nome do campo genérico
     */
    protected $Name;

    /**
     * @var string Valor do campo genérico
     */
    protected $Value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;

    }

    /**
     * @param $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }


}