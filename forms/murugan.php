<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'murugan25122000@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $murugan25122000 = new PHP_Email_Form;
  $murugan25122000->ajax = true;
  
  $murugan25122000->to = $receiving_email_address;
  $murugan25122000->from_name = $_POST['name'];
  $murugan25122000->from_email = $_POST['email'];
  $murugan25122000->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $murugan25122000->add_message( $_POST['name'], 'From');
  $murugan25122000->add_message( $_POST['email'], 'Email');
  $murugan25122000->add_message( $_POST['message'], 'Message', 10);

  echo $murugan25122000->send();
?>
