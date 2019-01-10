<?php
if ($_POST['lname']) && ($_POST['fname'] && ($_POST['message']) && ($_POST['email'])
{
    $to = "japlilian@gmail.com";
    $subject = "Automatically generated messege from" . $_POST['lname'] . ' ' . $_POST['fname'];
    $body = $_POST['message'];
    $headers = 'To: ' . $to . "\r\n";
    $headers .= 'From: ' . $_POST['email'];

    // Send mail function
    if(mail($to, $subject, $body, $headers))
    {
        echo '<h2>Mail sent successfuly!</h2>';
    } else {
        echo '<h2>Error occurred while sending the message</h2>';
    }
}
?>
