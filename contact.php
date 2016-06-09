<?php

// Checking For Blank Fields..
    if($_POST["custName"]==""||$_POST["custEmail"]==""||$_POST["custTel"]==""||$_POST["custMessage"]=="")
    {
        echo "Fill All Fields..";
    }else
    {
// Check if the "Sender's Email" input field is filled out
        $email=$_POST['custEmail'];
// Sanitize E-mail Address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email)
        {
            echo "Invalid Sender's Email";
        }
        else
        {
            $subject = "";
            $message = $_POST['custMessage'];
            $headers = 'From:'. $email . "\r\n"; // Sender's Email
            $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            // Send Mail By PHP Mail Function
         try{
                mail("dannykoolj@yahoo.com", $subject, $message, $headers);
                echo "Your mail has been sent successfuly ! Thank you for your feedback";

           } catch (Exception $e)
            {
                  echo 'Caught exception: ',  $e->getMessage(), "\n";
            }

        }
}
?>