<?php
echo "<h2>Twitter API Test</h2>";

require_once('TwitterAPIExchange.php');
 
#Set access tokens here
$settings = array(
    'oauth_access_token' => "-",
    'oauth_access_token_secret' => "-",
    'consumer_key' => "-",
    'consumer_secret' => "-"
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