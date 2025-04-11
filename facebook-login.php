<?php
require_once 'vendor/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => 'your_app_id',
  'app_secret' => 'your_app_secret',
  'default_graph_version' => 'v17.0',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost/schooltask-auth/facebook-callback.php', $permissions);

header('Location: ' . $loginUrl);
exit;
