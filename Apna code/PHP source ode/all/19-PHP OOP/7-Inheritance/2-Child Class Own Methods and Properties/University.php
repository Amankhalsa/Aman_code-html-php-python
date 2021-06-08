<?php

class University

{
    public $universityName;
    public $universityAddress;
    public $licenseNo;
    
    function __construct($universityName, $universityAddress, $licenseNo)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNo = $licenseNo;
    }

    function printUniversityDetails(){
        echo "University Name: $this->universityName" . PHP_EOL."<br>";
        echo "University Address: $this->universityAddress" . PHP_EOL."<br>";
        echo "License No: $this->licenseNo" . PHP_EOL."<br>";
    }

}
// $university = new University("Boston University", "Europe", "ABC123");
