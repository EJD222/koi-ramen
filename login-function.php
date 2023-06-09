<?php

require "database.php";

use App\User;

try {
    $email = $_POST['email'];
    $_SESSION ['email'] = $_POST['email'];
    $password = $_POST['password'];
    $result = User::attemptLogin($email, $password);

    if (!$result) {
        // Redirect to another page if login failed (invalid credentials)
        header("Location: log-in-ad.php");
        exit; // Add exit to stop executing further PHP code
    }

    if (!is_null($result)) {

        // Set the logged-in session variable and redirect user to index page

        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' => $result->getId(),
            'username' => $result->getUserName(),
            'email' => $result->getEmail()
        ];
        header('Location: book-your-table.php');
        exit; // Add exit to stop executing further PHP code
    }

} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

