<?php
    class Contact
    {
        private $name;
        private $company;
        private $phone;

        function __construct($name, $company, $phone)
        {
            $this->name = $name;
            $this->company = $company;
            $this->phone = $phone;
        }

        function get_contact() {
            return $this->name . " - " . $this->company . " (" . $this->phone . ")";
        }
    }
?>
