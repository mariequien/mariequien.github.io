<?php
/**
 * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
 * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
 */
/**
 * Specify the email address to which all mail messages are sent.
 * The script will try to use PHP's mail() function,
 * so if it is not properly configured it will fail silently (no error).
 */
 
 
$mailTo     = 'md.khandakarrafi@gmail.com';

/**
 * Set the message that will be shown on success
 */
$successMsg = 'Thank you, mail sent successfuly!';

/**
 * Set the message that will be shown if not all fields are filled
 */
$fillMsg    = 'Please fill all fields!';

/**
 * Set the message that will be shown on error
 */
$errorMsg   = 'Hm.. seems there is a problem, sorry!';

/**
 * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
 */

?>


    <?php
	$msg = "Name: ".$_POST['c-name']."\r\n";
	$msg .= "Email: ".$_POST['c-email']."\r\n";
	$msg .= "Telephone: ".$_POST['c-phone']."\r\n";
	$msg .= "Objectives: ".$_POST['c-message']."\r\n";

    $success = @mail($mailTo, $_POST['c-email'], $msg, 'From: ' . $_POST['c-name'] . '<' . $_POST['c-email'] . '>');
    
    // redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=../message-success.html\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=../message-failed.html\">";
	}