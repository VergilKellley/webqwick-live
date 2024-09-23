<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] !="") {
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            // submit the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "info@webqwick.com";
    $body = "";

    $body .="From: " . $name . "\r\n";
    $body .="Email: " . $email . "\r\n";
    $body .="Message: " . $message . "\r\n";

    mail($to, $subject, $body);
    $message_sent = true;
    }
    else {
        $invalid_class_name = "form-invalid";
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        .form-invalid {
            outline: 2px solid red;
        }
    </style>
</head>

<body style="display:flex; justify-content:center;align-items:center; height: 100vh">

<?php
    if($message_sent):
?>

        <h3>Thanks for your patronage!</h3>

<?php else: ?>
    <div
        style="display:flex; justify-content:center; align-items:center; height: 50vh;width: 500px; border: 2px solid #333">
        <form action="contact_form.php" method="POST">
            <div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" class="<?= $invalid_class_name ?? "" ?>" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="subject">Subject</label>
                    <input type="text" name="subject">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" rows="4" cols="50"></textarea>
                </div>
                <button type="submit" name="submit_contact_form">Send</button>
            </div>


        </form>
    </div>
    <?php endif; ?>
</body>

</html>