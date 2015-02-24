<?php
   
	if (isset($_POST["email"])) {
        $from = $_POST["email"]; // sender
        $subject = "WaleedAnwar.com email from" . $_POST["name"];
        $message = $_POST["message"];
        // message lines should not exceed 70 characters (PHP rule), so wrap it
        $message = wordwrap($message, 70);
        // send mail
        $header = 'From: ' . $from ;
        $send_mail = mail("butt.waleed@gmail.com",$subject,$message, $header);

        if(!$send_mail){
            //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
            $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
            die($output);
        }
        else{
             $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .' Thank you for your email'));
            die($output);
        }
       
  }
  else{
    die("Incomplete input " . print_r($_POST));
  }
?>