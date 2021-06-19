<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'googlevendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('776938898787-a13uvfg2ngj02ca1dj7vhh0jg7m8q7qo.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('wyf290aTrKk4hz6N8JLj8Pef');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://prizebond.cubescode.com/userpanel/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 