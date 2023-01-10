<?php
class CreditCard
{
    private $number;
    private $cvc;
    private $expiry;

    public function __construct($number, $cvc, $expiry)
    {
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expiry = $expiry;
    } 

    public function checkValidity()
    {

    }
}

$creditCard1 = new CreditCard('1234 5678 1234 5678', 123, '01/25');
$creditCard2 = new CreditCard('2143 6587 2143 6587', 321, '12/22'); 

var_dump($creditCard1);
var_dump($creditCard2cred);

?>