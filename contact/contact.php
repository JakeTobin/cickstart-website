<!-- Contact form PHP script -->

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "cindy@cickstart.net"; // Replace xxxx@xxxx.com with your email address (mandatory!)
    $subject = "Intro From Web"; // Choose a custom subject (not mandatory)

    $body = "You have received a message from " . $name . " (" . $email . "):\n\n" . $message;

    $from = "From: cickstart.net"; // Replace "Beetle Template" with your site name (not mandatory)
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();    
                
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {
                
            if (mail ($to, $subject, $body, $headers)) { 
                echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
            } else { 
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }  


?>