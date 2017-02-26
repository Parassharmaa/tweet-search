<?php
if(isset($_GET['query'])) {
	$qu = $_GET['query'];

	require('class/TwitterAPIExchange.php');

	$settings = array(
    'oauth_access_token' => "xxxx",
    'oauth_access_token_secret' => "xxxx",
    'consumer_key' => "xxx",
    'consumer_secret' => "xxxx"
);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = "?q=".$qu."&lang=en&count=10";
	$requestMethod = 'GET';
	
	$twitter = new TwitterAPIExchange($settings);
	$data =  $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
   	$tweets = json_decode($data, true);
   	echo $data;
}

else {
	echo "Nothing";
}
?>
