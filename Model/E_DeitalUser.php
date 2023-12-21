
<?php
class Entity_DeitalUser{
    public $Name;
    public $Adress;
    public $City;
    public $Phone;
    public $Email;
    public $Code;

    public function __construct($Name,$Address,$City,$Phone,$Email,$Code)
    {
        $this->Name=$Name;
        $this->Adress=$Address;
        $this->City=$City;
        $this->Phone=$Phone;
        $this->Email=$Email;
        $this->Code=$Code;
    }
}
?>