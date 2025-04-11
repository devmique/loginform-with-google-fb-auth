<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('your_client_id');
$client->setClientSecret('your_client_secret');
$client->setRedirectUri('http://localhost/schooltask-auth/google-callback.php');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $oauth = new Google_Service_Oauth2($client);
    $user_info = $oauth->userinfo->get();

    // Save user info to your DB or start session
    echo 'Welcome, ' . $user_info->name;
}
