<?php
if (!isset($_POST["form_submit_button"])) {
    header("Location: /index.html");
    die();
}

function testInput($input) {
    if (!isset($input) || empty($input)) {
        header("Location: /form_error.html#mobile_contact_us_id");
        die();
    } 
}

$input = [$_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["phone"], $_POST["message"]];

for ($i=0; $i<=4; $i++) {
    testInput($input[$i]);  
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];


$to_email = "bryanmckernon@gmail.com";
$subject_email = "Eviction Resource Email";
$message_email = 
"From: " . $email . "\n\n" .
"First Name: " . $first_name . "\n\n" .
"Last Name: " . $last_name . "\n\n" .
"Phone Number: " . $phone . "\n\n" .
"Message: " . "\n\n" . $message;
$headers_email =
"From: " . $email . "\n" .
"Reply-To: " . $email . "\n";

mail($to_email, $subject_email, $message_email, $headers_email);
header("Location: /form_success.html#mobile_contact_us_id");
?>