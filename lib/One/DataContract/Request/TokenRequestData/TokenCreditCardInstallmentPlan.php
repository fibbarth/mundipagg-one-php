<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;

/**
 * Class TokenCreditCardInstallmentPlan
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenCreditCardInstallmentPlan extends BaseObject
{
    /**
     * @var int Valor mínimo para habilitar o intervalo de parcelamento
     */
    protected $OrderAmountInCentsMin;

    /**
     * @var int Número mínimo de parcelas
     */
    protected $InstallmentMin;

    /**
     * @var int Número máximo de parcelas
     */
    protected $InstallmentMax;

    /**
     * @return int
     */
    public function getInstallmentMax()
    {
        return $this->InstallmentMax;
    }

    /**
     * @return int
     */
    public function getInstallmentMin()
    {
        return $this->InstallmentMin;
    }

    /**
     * @return int
     */
    public function getOrderAmountInCentsMin()
    {
        return $this->OrderAmountInCentsMin;
    }

    /**
     * @param $InstallmentMax
     * @return $this
     */
    public function setInstallmentMax($InstallmentMax)
    {
        $this->InstallmentMax = $InstallmentMax;

        return $this;
    }

    /**
     * @param $InstallmentMin
     * @return $this
     */
    public function setInstallmentMin($InstallmentMin)
    {
        $this->InstallmentMin = $InstallmentMin;

        return $this;
    }

    /**
     * @param $OrderAmountInCentsMin
     * @return $this
     */
    public function setOrderAmountInCentsMin($OrderAmountInCentsMin)
    {
        $this->OrderAmountInCentsMin = $OrderAmountInCentsMin;

        return $this;
    }


}