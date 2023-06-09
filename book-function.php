<?php

require "database.php";
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$full_name = $_POST['full_name'];
$email = $_SESSION ['email'];
$phone_number = $_POST['phone_number'];
$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];
$persons = $_POST['persons'];
$notes = $_POST['notes'];

// Check if the reservation time is within the allowed opening hours
$openingHourAllowed = true;
$reservationDateTime = strtotime($reservation_date . ' ' . $reservation_time);
$dayOfWeek = date('N', $reservationDateTime);
$hour = date('G', $reservationDateTime);

// Monday to Friday: Opening hour restriction from 11 AM to 10 PM
if ($dayOfWeek >= 1 && $dayOfWeek <= 5 && ($hour < 11 || $hour >= 22)) {
    $openingHourAllowed = false;
}

// Saturday and Sunday: Opening hour restriction from 11 AM to 12 AM
if (($dayOfWeek == 6 || $dayOfWeek == 7) && ($hour < 11 || $hour >= 24)) {
    $openingHourAllowed = false;
}

if (!$openingHourAllowed) {
    echo "Reservation not allowed during closed hours.";
    exit;
}

// Create the reservation in the database
$sql = "INSERT INTO reservations (full_name, email, phone_number, reservation_date, reservation_time, persons, notes)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute([$full_name, $email, $phone_number, $reservation_date, $reservation_time, $persons, $notes]);

    // Send reservation details via email
    $subject = "RESERVATION " . date('Y-m-d', $reservationDateTime);
    $message = "Name: " . $full_name . "\n";
    $message .= "Date: " . $reservation_date . "\n";
    $message .= "Time: " . $reservation_time . "\n";
    $message .= "Number of People: " . $persons . "\n";
    $message .= "Notes: " . $notes;

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Port       = 2525;
        $mail->Username   = '51dddd894ba129';
        $mail->Password   = '079e90ee46fde0';

        $mail->setFrom($email, $full_name);
        $mail->addAddress('KoiRamen@ramen.net', 'Koi Ramen');

        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
    } catch (Exception $e) {
        echo "Error sending reservation details via email: " . $e->getMessage();
        exit;
    }

    // Pass reservation data as URL parameters
    $reservationUrl = "thank-you.php?date=" . urlencode($reservation_date) . "&time=" . urlencode($reservation_time) . "&guests=" . urlencode($persons);
    header("Location: $reservationUrl");
    exit;
} catch (PDOException $e) {
    echo "Error creating reservation: " . $e->getMessage();
    exit;
}
