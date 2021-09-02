<?php

namespace Gateway\One\DataContract\Request\CreateSaleRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class Recurrency
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class Recurrency extends BaseObject
{
    /**
     * @var string Data para o início da cobrança recorrente
     */
    protected $DateToStartBilling;

    /**
     * @var string Tipo do ciclo da recorrência
     */
    protected $Frequency;

    /**
     * @var int Intervalo de cada ciclo de recorrência
     */
    protected $Interval;

    /**
     * @var int Número de ciclos que serão cobrados
     */
    protected $Recurrences;

    /**
     * @var bool Transação de R$ 1,00 para validar o cartão
     */
    protected $OneDollarAuth;

    /**
     * @return string
     */
    public function getDateToStartBilling()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->DateToStartBilling);
    }

    /**
     * @param \DateTime $dateToStartBilling
     * @return $this
     */
    public function setDateToStartBilling(\DateTime $dateToStartBilling)
    {
        $this->DateToStartBilling = $dateToStartBilling->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param string $Frequency
     * @return $this
     */
    public function setFrequency($Frequency)
    {
        $this->Frequency = $Frequency;

        return $this;
    }

    /**
     * @return int
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     * @param int $Interval
     * @return $this
     */
    public function setInterval($Interval)
    {
        $this->Interval = $Interval;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrences()
    {
        return $this->Recurrences;
    }

    /**
     * @param int $Recurrences
     * @return $this
     */
    public function setRecurrences($Recurrences)
    {
        $this->Recurrences = $Recurrences;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOneDollarAuth()
    {
        return $this->OneDollarAuth;
    }

    /**
     * @param bool $OneDollarAuth
     * @return $this
     */
    public function setOneDollarAuth($OneDollarAuth)
    {
        $this->OneDollarAuth = $OneDollarAuth;

        return $this;
    }


}