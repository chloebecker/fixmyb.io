<?php
echo "<h2>Twitter API Test</h2>";

require_once('TwitterAPIExchange.php');
 
#Set access tokens here
$settings = array(
    'oauth_access_token' => "792463225463853061-P5ZDTgnzgkroQtYu3QkPR5wn9GSmfLA",
    'oauth_access_token_secret' => "HQVGmAORW0RTZFDdg0CSWuRShQ7THCJnsAh0mPnOKNR6O",
    'consumer_key' => "o7QBNAyTr2odzOdGSIrBENTEY",
    'consumer_secret' => "uqafomtqM8XZTxt8gC7Sr7lmZfJIHjqnTUvJp4yVv74f7PwfQw"
);

$url = "https://api.twitter.com/1.1/users/lookup.json";
$requestMethod = "GET";
$getfield = "?screen_name=fixmybio";
$twitter = new TwitterAPIExchange($settings);
#json_decode -> decodes JSON string into associative array
$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

#if Twitter returns an error...
if($string['errors'][0]['message'] != '') {echo "<h3>Houston, we have a problem...</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

### to see what the API returns ###
#echo "<pre>";
#print_r($string);
#echo "</pre>";

$userInfo = $string[0];
#echo "Screen Name: ". $userInfo['screen_name']."<br>";
echo "User Bio: ". $userInfo['description']."<br>";


?>