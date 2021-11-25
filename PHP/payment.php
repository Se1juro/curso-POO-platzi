<?php
class Payment
{
    public int $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function printPayment()
    {
        return "Payment id: " . $this->id;
    }
}
