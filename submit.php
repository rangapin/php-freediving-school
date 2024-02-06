<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $name = $surname = $email = $message = "";
    $nameErr = $surnameErr = $emailErr = $messageErr = "";

    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate surname
    if (empty($_POST["surname"])) {
        $surnameErr = "Surname is required";
    } else {
        $surname = test_input($_POST["surname"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If all fields are valid, process the form data further 
    if (empty($nameErr) && empty($surnameErr) && empty($emailErr) && empty($messageErr)) {
        // we'll just print the form data
        echo "Name: $name<br>";
        echo "Surname: $surname<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    } else {
        // If there are validation errors, display them
        echo "<span class='text-red-500'>$nameErr $surnameErr $emailErr $messageErr</span>";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
