<?php
$to_email = "kazisajid1450@gmail.com";
$subject = "Subject";
$body = "Hi,";
$headers = "From: kazisajid14@gmail.com";

if (mail($to_email = "kazisajid1450@gmail.com", $subject = "Subject", $body = "Hi,", $headers = "From: kazisajid14@gmail.com")) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}