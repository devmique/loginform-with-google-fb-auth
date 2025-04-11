<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('your_client_id');
$client->setClientSecret('your_client_secret');
$client->setRedirectUri('http://localhost/schooltask-auth/google-callback.php');
$client->addScope('email');
$client->addScope('profile');

$login_url = $client->createAuthUrl();
header('Location: ' . $login_url);
exit;
