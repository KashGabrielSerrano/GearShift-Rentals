<?php
require_once 'connection/config.php';
$con = connection();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_inquiry'])) {
    
$fullName = trim(filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS));
    $email    = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $phone    = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS));
    $vehicle  = trim(filter_input(INPUT_POST, 'vehicle_interest', FILTER_SANITIZE_SPECIAL_CHARS));
    $message  = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS));
    $pickupDate = preg_replace('/[^0-9\/\-]/', '', trim($_POST['pickup_date']));
    $dropoffDate = preg_replace('/[^0-9\/\-]/', '', trim($_POST['dropoff_date']));
    

    if (!empty($fullName) && !empty($email) && !empty($vehicle) && !empty($message)) {
        
        $stmt = $con->prepare("INSERT INTO contact_inquiries (full_name, email, phone, vehicle_interest, pickup_date, dropoff_date, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fullName, $email, $phone, $vehicle, $pickupDate, $dropoffDate, $message);
        
        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: index.php?status=success#contact");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
            $stmt->close();
            $con->close();
        }

    } else {
        $con->close();
        header("Location: index.php?status=error#contact");
        exit();
    }
}
?>