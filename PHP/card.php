<?php
require_once("./payment.php");
class Card extends Payment
{
    public int $number;
    public int $cvv;
    public string $date;

    public function __construct($id, $number, $cvv, $date)
    {
        parent::__construct($id);
        $this->number = $number;
        $this->number = $cvv;
        $this->date = $date;
    }
}
