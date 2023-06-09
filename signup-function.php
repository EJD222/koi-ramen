<?php

require "database.php";
require "vendor/autoload.php";

use App\User;

// Save the user information, and automatically login the user

try {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Debugging code
    error_log("User name: ".$user_name);
    error_log("Email: ".$email);
    error_log("Password: ".$password);

    $result = User::register($user_name, $email, $password);

    // Debugging code
    error_log("Result: ".$result);

    if ($result) {
        // Set the logged-in session variable
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' => $result,
            'username' => $user_name,
            'email' => $email,
        ];

        header("Location: sign-up-urs.php");
        exit; // Add exit to stop executing further PHP code
    }

} catch (PDOException $e) {
    if ($e->errorInfo[1] === 1062) {
        // Redirect to another page if registration failed (duplicate email)
        header("Location: sign-up-uae.php");
        exit; // Add exit to stop executing further PHP code
    } else {
        error_log($e->getMessage());
        echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
    }
}

?>
