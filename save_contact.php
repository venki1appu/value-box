<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $data = array($name, $email, $phone, $message);
    $file = fopen("contact.csv", "a");

    if ($file) {
        fputcsv($file, $data);
        fclose($file);
        echo "Thank you! Your information has been saved.";
    } else {
        echo "Error: Unable to save your information.";
    }
}
?>
