<?php
require("connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"]; // reading users input(name) from the form
    $email = $_POST["email"]; //reading the email from the form
    $number = $_POST["number"];

    // Insert into database
    $sql = "INSERT INTO patients (name, email, number) VALUES ('$name', '$email', $number)";

    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $connection->error;
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP MySQL Form</title>
</head>
<body>
    <h2>Enter Your Info</h2>
    <form method="POST" action="">
        Name: <input type="text" name="fullname" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Number: <input type="number" name="number" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>