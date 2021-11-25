<?php
require_once("./payment.php");
class PayPal extends Payment
{
    public string $email;

    public function __construct($id, $email)
    {
        parent::__construct($id);
        $this->email = $email;
    }
}
