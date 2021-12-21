<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('199485624651-h5alck78ttfl0hnc6k1s1m5n45pulmhg.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/php/API/login/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 