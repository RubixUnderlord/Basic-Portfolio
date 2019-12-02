<?php

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    $mailTo = "robbysaldi@yahoo.com";
    $subject = "Website Stuff";
    $headers = "From: ".$Email;
    $txt = "You have received an e-mail from".$Name.".\n\n".$Message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}