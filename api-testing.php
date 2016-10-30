<?php
echo "<h2>Twitter API Test</h2>";

require_once('TwitterAPIExchange.php');
 
#Set access tokens here
$settings = array(
    'oauth_access_token' => "804870278-QYktWwvRoD7G4L8GrFHswGkQXOjc0qJezOBctrgH",
    'oauth_access_token_secret' => "V3xiypK19mEhY8exrbm7XnpXtj7SndRegYJ3yRboQEFnf",
    'consumer_key' => "	yNVkcJwn2yPL5veEsXxv2q1Or",
    'consumer_secret' => "jQc2bwk8m20eWt5j47cXTxsm7Wj9AGWP2VgGoW7prwqmoCeUOO"
);

$url = "https://api.twitter.com/1.1/users/lookup.json";
$requestMethod = "GET";
$getfield = "?screen_name=cbecker46"
$twitter = new TwitterAPIExchange($settings);
#json_decode -> decodes JSON string into associative array
$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

#if Twitter returns an error...
if($string["errors"][0]["message"] != "") {echo "<h3>Houston, we have a problem...</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

echo "<pre>";
print_r($string);
echo "</pre>";

echo "Screen Name: ". $string['screen_name']."<br>"
echo "User Bio: ". $string['description']."<br>"


?>