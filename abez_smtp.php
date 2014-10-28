<?php
/*
Plugin Name: WordPress SMTP Mail
Description: Versenden von Mails via SMTP Protokoll
Version: 1.0
Author: Alfred Bez
Author URL: http://www.alfredbez.de
Copyright 2014 by Alfred Bez (alfred.bez@googlemail.com)
*/
add_action( 'phpmailer_init', 'wp_mail_smtp' );
function wp_mail_smtp($mail) {
  $mail->IsSMTP();
  $mail->Host       = "";
  $mail->Port       = 99999;
  $mail->SMTPAuth   = true;
  $mail->Username   = "";
  $mail->Password   = "";
  $mail->SMTPSecure = ""; // "ssl" or "tls"
}