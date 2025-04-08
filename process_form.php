<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/controller/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input data
    if (empty($name) ||  empty($email) || empty($message)) {
        $_SESSION['message'] = "All fields are required.";
        $_SESSION['message_type'] = "danger";
        header("Location: contact.php");
        exit;
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email address: $email";
        $_SESSION['message_type'] = "danger";
        header("Location: contact.php");
        exit;
    }

    // Insert data into the database
    try {
        $sql = "INSERT INTO `contact` (`name`,  `email`, `message`) VALUES (:name,  :email, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Thank you for your message. We will get back to you soon.";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "There was an error saving your message. Please try again later.";
            $_SESSION['message_type'] = "danger";
        }
    } catch (Exception $e) {
        error_log("Database Error: {$e->getMessage()}", 3, "./php_errors.log");
        $_SESSION['message'] = "There was an error saving your message: " . $e->getMessage();
        $_SESSION['message_type'] = "danger";
    }

    header("Location: contact.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>