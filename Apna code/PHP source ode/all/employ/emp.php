<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
 
<body>
    <!-- 
        1) Print the Employee Details
        2) Working Hours
        3) Employee Email ID and Address
        4) Check if Employer is Married or not
        5) Print the Employer Last Salary Drawn using Doubles
     -->
 
    <?php
    $employeeID = 1000;
    $employeeFirstName = "Mike";
    $employeeLastName = "Jersey";
    $age = 30;
    $gender = "Male";
    $workingHours = 40;
    $department = "Finance/Revenue";
    $employeeEmail = "paph@example.com";
    $phoneNumber = 123456789;
    $married = null;
 
    // Initiation of variables 
    $payRate = 15.73;
    $overTimeHours = 12;
    $regularPay = 0;
    $overtimeRates = $payRate * 1.5;
    $overTImePay = 0;
    $grossPay = 0;
    ?>
 
    <h2> Check if Employer is Married or not</h2>
    <?php
    $status = !($married) ? "Married" : "Not Married";
    ?>
    <h3>Marital Status: <?= $status ?></h3>
 
    <?php
    // Print the Employer Last Salary Drawn using Doubles
        // Calculate regular pay
        $regularPay = $workingHours * $payRate;
        $overTImePay = $overtimeRates * $overTimeHours;
        $grossPay = $regularPay + $overTImePay;
    ?>
 
 
 
    <h1>1) Print the Employee Details</h1>
    <table border="1">
        <caption>Employee data</caption>
        <tr>
            <th>Employee ID</th>
            <th><?= $employeeID ?></th>
        </tr>
        <tr>
            <th>First Name</th>
            <th><?= $employeeFirstName ?></th>
        </tr>
        <tr>
            <th>Last Name</th>
            <th><?= $employeeLastName ?></th>
        </tr>
        <tr>
            <th>Age</th>
            <th><?= $age ?></th>
        </tr>
        <tr>
            <th>Gender</th>
            <th><?= $gender ?></th>
        </tr>
        <tr>
            <th>Email</th>
            <th><?= $employeeEmail ?></th>
        </tr>
        <tr>
            <th>Department</th>
            <th><?= $department ?></th>
        </tr>
        <tr>
            <th>Phone Number</th>
            <th><?= $phoneNumber ?></th>
        </tr>
        <tr>
            <th>Status</th>
            <th><?= $status ?></th>
        </tr>
        <tr>
            <th>Working hours</th>
            <th><?= $workingHours ?></th>
        </tr>
        <tr>
            <th>Pay Rate hourly</th>
            <th>$ <?= $payRate ?></th>
        </tr>
        <tr>
            <th>Regular Pay</th>
            <th>$ <?= $regularPay ?></th>
        </tr>
        <tr>
            <th>Overtime hours</th>
            <th><?= $overTimeHours ?></th>
        </tr>
        <tr>
            <th>Overtime Pay</th>
            <th>$ <?= $overTImePay ?></th>
        </tr>
        <tr>
            <th>Salary</th>
            <th>$ <?= $grossPay ?></th>
        </tr>
    </table>
</body>
 
</html>