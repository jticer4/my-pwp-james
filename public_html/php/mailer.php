<?php

/**
 * mailer.php
 *
 * Handles secure mail transport using the Swiftmailer
 * library with Google reCAPTCHA integration.
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 **/

// require all composer dependencies
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

// require mail-config.php
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// if there's a reCAPTCHA error, throw an exception
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}

	/**
	 * Sanitize the inputs from the form
	 **/
	$firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$subject = "Message Sent from PWP";

	// create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * Attach the sender to the message.
	 * This takes the form of an associative array where $email is the key for the real name.
	 **/
	$swiftMessage->setFrom([$email => $firstName . " " . $lastName]);

	/**
	 * Attach the recipients to the message.
	 * $MAIL_RECIPIENTS is set in mail-config.php
	 **/
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * Attach the actual message to the message.
	 **/
	$swiftMessage->setBody($message . " " . $phone, "text/html");
	$swiftMessage->addPart(html_entity_decode($message . " " . $phone), "text/plain");

	/**
	 * Send the Email via SMTP.
	 *
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * The send method returns the number of recipients that accepted the Email.
	 * If the number attempted !== number accepted it's an Exception.
	 **/
	if($numSent !== count($recipients)) {
		// The $failedRecipients parameter passed in the send() contains an array of the Emails that failed.
		throw(new RuntimeException("unable to send email"));
	}

	// report a successful send!
	echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Whoops!</strong> Your email was unable to be sent: " . $exception->getMessage() . "</div>";
}