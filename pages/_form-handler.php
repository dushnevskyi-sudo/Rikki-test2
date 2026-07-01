<?php
/**
 * Handles POST submissions from the Contact and Quote forms.
 * Performs basic server-side validation and prepares a status message
 * that the corresponding page renders. In production, plug in real
 * email sending / CRM here (see the mail() block below).
 */

$form_errors = [];
$form_done   = false;
$form_type   = $_POST['form_type'] ?? '';

// Honeypot: bots fill hidden field, humans don't.
if (!empty($_POST['website'])) {
    $form_done = true; // silently accept, do nothing
    return;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '')                                   $form_errors['name']  = 'Please enter your name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))     $form_errors['email'] = 'Please enter a valid email address.';
if ($form_type === 'contact' && $message === '')    $form_errors['message'] = 'Please enter a message.';

if (empty($form_errors)) {
    // ---- Compose the notification -----------------------------------
    $subject = ($form_type === 'quote')
        ? 'New quote request from ' . $name
        : 'New contact message from ' . $name;

    $body  = "Name: {$name}\nEmail: {$email}\n";
    foreach (['company', 'phone', 'origin', 'destination', 'cargo', 'service'] as $extra) {
        if (!empty($_POST[$extra])) {
            $body .= ucfirst($extra) . ': ' . trim($_POST[$extra]) . "\n";
        }
    }
    if ($message !== '') {
        $body .= "Message:\n{$message}\n";
    }

    // Enable on a live server with a configured mail transport:
    // @mail($COMPANY['email'], $subject, $body, 'From: ' . $COMPANY['email']);

    $form_done = true;
}
