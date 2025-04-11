<?php
require_once 'vendor/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => 'your_app_id',
  'app_secret' => 'your_app_secret',
  'default_graph_version' => 'v17.0',
]);

$helper = $fb->getRedirectLoginHelper();

try {
  // Get access token
  $accessToken = $helper->getAccessToken();

  // Get user data from Facebook
  $response = $fb->get('/me?fields=id,name,email', $accessToken);
  $user = $response->getGraphUser();

  // Handle the user data (e.g., save to session)
  echo 'Logged in as: ' . $user['name'];

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Error from Facebook API: ' . $e->getMessage();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Error from Facebook SDK: ' . $e->getMessage();
}
?>
