
<?php
class Entity_User{
    public $Name;
    public $Adress;
    public $City;
    public $Phone;
    public function __construct($Name,$Address,$City,$Phone)
    {
        $this->Name=$Name;
        $this->Adress=$Address;
        $this->City=$City;
        $this->Phone=$Phone;
    }
}
?>