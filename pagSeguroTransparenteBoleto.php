<?php
class pagSeguroTransparente {

    public $payment;
    public $mode;
    public $method;
    public $name;
    public $email;
    public $areaCode;
    public $number;
    public $typeDoc;
    public $value;
    public $hash;
    public $currency;
    public $notificationURL;
    public $extraAmount;
    public $reference;
    public $street;
    public $numberAdd;
    public $complement;
    public $district;
    public $city;
    public $state;
    public $country;
    public $postalCode;
    public $type;
    public $cost;

    public function __costruct($payment,$mode,$method,$name,$email, $areaCode,$number,$typeDoc, $value,$hash,$currency,$notificationURL,$extraAmount,$reference,$street,$numberAdd,$complement,$district,$city,$state,$country,$postalCode,$type,$cost){
        parent::__costruct($payment,$mode,$method, $name, $email,$areaCode,$number,$typeDoc,$value, $hash, $currency, $hash,$notificationURL,$extraAmount,$reference,$street,$numberAdd,$complement,$district,$city,$state,$country,$postalCode,$type,$cost);
    }
    public function __get($valor){
        return $this->$valor;
    }
    public function __set($propriedade,$valor){
        $this->$propriedade = $valor;
    }
    public function payment() {
        return $this->payment = array(
            'mode' => $this->mode,
            'method' => $this->method,
            'sender' => array(
                'name' => $this->name,
                'email' => $this->email,
                'phone' => array(
                    'areaCode' => $this->areaCode,
                    'number' => $this->number
                ),
                'documents' => array(
                    'document' => array(
                        'type' => $this->typeDoc,
                        'value' => $this->value
                    )
                ),
                'hash' => $this->hash
            ),
            'currency' => $this->currency,
            'notificationURL' => $this->notificationURL,
            'items' => item(),
            'extraAmount' => $this->extraAmount,
            'reference' => $this->reference,
            'shipping' => array(
                'address' => array(
                    'street' => $this->street,
                    'number' => $this->numberAdd,
                    'complement' => $this->complement,
                    'district' => $this->district,
                    'city' => $this->city,
                    'state' => $this->state,
                    'country' => $this->country,
                    'postalCode' => $this->postalCode,
                ),
                'type' => $this->type,
                'cost' => $this->cost
            )
        );
    }
    public function items($itens) {
        return $itens;
    }
    public function convertArrayXml() {
        $xml = new SimpleXMLElement('<payment/>');
        array_walk_recursive($this->payment, array ($xml, 'addChild'));
        return $xml->asXML();
    }
}