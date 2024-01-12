<?php
// test.php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Simulate storing the messages in a session variable
    if (!isset($_SESSION['chatMessages'])) {
        $_SESSION['chatMessages'] = array();
    }

    // Append the new message to the session variable
    $_SESSION['chatMessages'][] = "$username: $message";

    echo "Nachricht erfolgreich gesendet.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Read the messages from the session variable
    $messages = isset($_SESSION['chatMessages']) ? implode("\n", $_SESSION['chatMessages']) : '';

    echo $messages;
}
?>
