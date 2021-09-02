<?php

namespace Gateway\One\DataContract\Request;

use Gateway\One\DataContract\Common\BaseObject;
use Gateway\One\DataContract\Common\Address;
use Gateway\One\DataContract\Enum\BuyerCategoryEnum;
use Gateway\One\DataContract\Enum\EmailTypeEnum;

/**
 * Class Buyer
 * @package Gateway\One\DataContract\Request\CreateSaleRequestData
 */
class CreateBuyerRequest extends BaseObject
{

    /**
     * @var string Data de nascimento do comprador
     */
    protected $Birthdate;

    /**
     * @var string Identificação do comprador na plataforma One
     */
    protected $BuyerKey;

    /**
     * @var BuyerCategoryEnum Categoria do cliente na plataforma One
     */
    protected $BuyerCategory;

    /**
     * @var string Referência do comprador no sistema da loja
     */
    protected $BuyerReference;

     /**
     * @var string Data do cadastro do comprador na plataforma da loja
     */
    protected $CreateDateInMerchant;

    /**
     * @var string Número do documento
     */
    protected $DocumentNumber;

    /**
     * @var string Tipo do documento
     */
    protected $DocumentType;

    /**
     * @var string E-mail do comprador
     */
    protected $Email;

    /**
     * @var EmailTypeEnum Tipo do email
     */
    protected $EmailType;

    /**
     * @var string Identificação do comprador no Facebook
     */
    protected $FacebookId;

    /**
     * @var string Sexo do comprador
     */
    protected $Gender;

    /**
     * @var string Telefone residencial do comprador
     */
    protected $HomePhone;

    /**
     * @var Data da última atualização do cadastro do comprador na plataforma da loja
     */
    protected $LastBuyerUpdateInMerchant;

    /**
     * @var string Telefone celular do comprador
     */
    protected $MobilePhone;

    /**
     * @var string Nome do comprador
     */
    protected $Name;

    /**
     * @var string Tipo de pessoa
     */
    protected $PersonType;

    /**
     * @var string Identificação do comprador no Twitter
     */
    protected $TwitterId;

    /**
     * string Telefone de trabalho do comprador
     */
    protected $WorkPhone;

    /**
     * @var Address[] Coleção de endereços do comprador.
     */
    protected $AddressCollection;


    /**
     *
     */
    function __construct()
    {
        $this->AddressCollection = array();
    }

    /**
     * @return string
     */
    public function getBuyerKey()
    {
        return $this->BuyerKey;
    }

    /**
     * @param string $buyerKey
     * @return $this
     */
    public function setBuyerKey($buyerKey)
    {
        $this->BuyerKey = $buyerKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPersonType()
    {
        return $this->PersonType;
    }

    /**
     * @param string $personType
     * @return $this
     */
    public function setPersonType($personType)
    {
        $this->PersonType = $personType;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerReference()
    {
        return $this->BuyerReference;
    }

    /**
     * @param string $buyerReference
     * @return $this
     */
    public function setBuyerReference($buyerReference)
    {
        $this->BuyerReference = $buyerReference;

        return $this;
    }

    /**
     * @return BuyerCategoryEnum
     */
    public function getBuyerCategory()
    {
        return $this->BuyerCategory;
    }

    /**
     * @param BuyerCategoryEnum $buyerCategory
     * @return $this
     */
    public function setBuyerCategory($buyerCategory)
    {
        $this->BuyerCategory = $buyerCategory;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $documentNumber
     * @return $this
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->DocumentNumber = $documentNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @param string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return EmailTypeEnum
     */
    public function getEmailType()
    {
        return $this->EmailType;
    }

    /**
     * @param EmailTypeEnum $emailType
     * @return $this
     */
    public function setEmailType($emailType)
    {
        $this->EmailType = $emailType;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->Gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    /**
     * @param string $homePhone
     * @return $this
     */
    public function setHomePhone($homePhone)
    {
        $this->HomePhone = $homePhone;

        return $this;
    }

    /**
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->IpAdress;
    }

    /**
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->IpAdress = $ipAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->MobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }

    /**
     * @param string $workPhone
     * @return $this
     */
    public function setWorkPhone($workPhone)
    {
        $this->WorkPhone = $workPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getBirthdate()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->Birthdate);
    }

    /**
     * @param \DateTime $birthDate
     * @return $this
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->Birthdate = $birthdate->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return Address[]
     */
    public function getAddressCollection()
    {
        return $this->AddressCollection;
    }

    /**
     * @param Address $address
     * @return Address
     */
    public function addAddress(Address $address = null)
    {
        if ($address == null)
        {
            $address = new Address();
        }

        $this->AddressCollection[] = $address;

        return $address;
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->FacebookId;
    }

    /**
     * @param string $facebookId
     * @return $this
     */
    public function setFacebookId($facebookId)
    {
        $this->FacebookId = $facebookId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterId()
    {
        return $this->TwitterId;
    }

    /**
     * @param string $twitterId
     * @return $this
     */
    public function setTwitterId($twitterId)
    {
        $this->TwitterId = $twitterId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreateDateInMerchant()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->CreateDateInMerchant);
    }

    /**
     * @param \DateTime $createDateInMerchant
     * @return $this
     */
    public function setCreateDateInMerchant(\DateTime $createDateInMerchant)
    {
        $this->CreateDateInMerchant = $createDateInMerchant->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return Data
     */
    public function getLastBuyerUpdateInMerchant()
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->LastBuyerUpdateInMerchant);
    }

    /**
     * @param \DateTime $lastBuyerUpdateInMerchant
     * @return $this
     */
    public function setLastBuyerUpdateInMerchant(\DateTime $lastBuyerUpdateInMerchant)
    {
        $this->LastBuyerUpdateInMerchant = $lastBuyerUpdateInMerchant->format('Y-m-d\TH:i:s');

        return $this;
    }
}