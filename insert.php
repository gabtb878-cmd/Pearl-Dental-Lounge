<?php
require("connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_name = $_POST["first-name"]; // reading users input(name) from the form
    $Last_name = $_POST["last-name"];
    $Email_Address = $_POST["email-address"]; //reading the email from the form
    $Phone_number = $_POST["phone-number"];
    $Current_Dental_Condition = $_POST["textarea"]
    $Preferred_Date = $_POST["date"]
    $Reason_for_visit = $_POST["reason"]

    // Insert into database
    $sql = "INSERT INTO appoinment (First_name, Last_name, Email_Address ,Phone_number,Current_Dental_Condition, Preferred_Date, Reason_for_visit ) VALUES ('$First_name', '$Last_name', '$Email_Address', '$Phone_number','$Current_Dental_Condition','$Preferred_Date','$Reason_for_visit')";

    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $connection->error;
    }
}
?>

