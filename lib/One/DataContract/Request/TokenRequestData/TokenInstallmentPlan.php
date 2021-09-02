<?php

namespace Gateway\One\DataContract\Request\TokenRequestData;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Enum;

/**
 * Class TokenInstallmentPlan
 * @package Gateway\One\DataContract\Request\TokenRequestData
 */
class TokenInstallmentPlan extends BaseObject
{

	/**
	 * @var Enum\CreditCardBrandEnum Bandeira do cartão
	 */
	protected $CreditCardBrand;

	/**
	 * @var TokenCreditCardInstallmentPlan[] Plano de parcelas para a bandeira
	 */
	protected $CreditCardInstallmentPlan;

	/**
	 * @return Enum\CreditCardBrandEnum
	 */
	public function getCreditCardBrand() 
	{
		return $this->CreditCardBrand;
	}

    /**
     * @param $creditCardBrand
     * @return $this
     */
	public function setCreditCardBrand($creditCardBrand)
	{
		$this->CreditCardBrand = $creditCardBrand;

		return $this;
	}

    /**
     * @return TokenCreditCardInstallmentPlan[]
     */
    public function getCreditCardInstallmentPlan()
    {
        if (empty($this->CreditCardInstallmentPlan)){
            $this->CreditCardInstallmentPlan = array();
        }

        return $this->CreditCardInstallmentPlan;
    }

    /**
     * @param TokenCreditCardInstallmentPlan $tokenCreditCardInstallmentPlan
     * @return TokenCreditCardInstallmentPlan
     */
    public function addCreditCardInstallmentPlan($tokenCreditCardInstallmentPlan = null)
    {
        if ($tokenCreditCardInstallmentPlan == null){
			$tokenCreditCardInstallmentPlan = new TokenCreditCardInstallmentPlan();
        }

        $this->CreditCardInstallmentPlan[] = $tokenCreditCardInstallmentPlan;

        return $tokenCreditCardInstallmentPlan;
    }

}