
<?php

        if(isset($_POST['submit'])){
            $to = "aatique987@gmail.com"; // this is your Email address
            $from = $_POST['Email']; // this is the sender's Email address
            $NAME = $_POST['Name'];
            $PROJECT = $_POST['Project'];
            $subject = "Form submission";
            $subject2 = "Copy of your form submission";
            $message = $NAME . " " . " wrote the following:" . "\n\n"."Project Name".$PROJECT."\n\n"."Message:" .$_POST['Message'];
            $message2 = "Here is a copy of your message " . $NAME . "\n\n" ."Project Name".$PROJECT."\n\n"."Message:". $_POST['Message'];

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $NAME . ", we will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
      else {
        echo "<br> Plz fill out complete form! <br>";
      }

?>
