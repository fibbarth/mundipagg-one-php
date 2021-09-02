<?php
namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;


class UpdateInstantBuyDataRequest extends BaseObject {
    protected $BuyerKey;
    
    public function getBuyerKey(){
        return $this->BuyerKey;
    }
    
    public function setBuyerKey($buyerKey){
        $this->BuyerKey = $buyerKey;
        return $this;
    }
}
