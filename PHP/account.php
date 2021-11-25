<?php
class Account
{
    public int $id;
    public string $name;
    public string $document;
    public string $password;

    public function __construct($name, $document)
    {
        $this->name = $name;
        $this->document = $document;
    }
}
