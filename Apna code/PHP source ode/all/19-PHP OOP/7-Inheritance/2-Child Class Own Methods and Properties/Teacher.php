<?php
class Teacher extends University
{
    public $teacherName;
    public $teacherAge;
    public $subject;
    function __construct($teacherName, $teacherAge, $subject,$universit )
    {
       //Update the Teacher Details
        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->subject = $subject;
        $this->Universit =$universit;
        // by creating new variable we access property of university 
     
        //Update the University Details for this Teacher
        $this->universityName = $universit->universityName;
        $this->universityAddress = $universit->universityAddress;
        $this->licenseNo = $universit->licenseNo;
    }
    function printTeacherDetails(){
        echo "<br>Teacher Name: $this->teacherName" . PHP_EOL."<br>";
        echo "Teacher Age: $this->teacherAge" . PHP_EOL."<br>";
        echo "Subject: $this->subject" . PHP_EOL."<br>";
    }
}