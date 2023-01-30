<?php
    $name = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $message = trim($_POST['message']);

    if(!empty($name) && !empty($lname) && !empty($email) && !empty($phone_number) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to = "roska.butkus@gmail.com";
        $subject = "nauja zinute";
        $autorius = 'Nuo: ' . $name . $lname . ', ' . $email;
        $zinute = htmlspecialchars($message);
        // mail($to, $subject, $autorius, $zinute, $from);
        // echo "<script>alert('Thank you. Your message has been received. We will contact you shortly.');</script>";
        }
}

include('database.php');