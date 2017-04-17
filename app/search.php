<?php
if(isset($_GET['query'])) {
	$qu = $_GET['query'];

	require('class/TwitterAPIExchange.php');

	$settings = array(
    'oauth_access_token' => "850697540-ZJcAlOKgCCOCtY1QH5ka9QItkEWejLuwmcA2SyCP",
    'oauth_access_token_secret' => "P7gXcpw4lpCxKJhTMlrrH0I7X2DC3vf4R1nKzkOyMKmYA",
    'consumer_key' => "zSVvysItsAAOrVFO1gJROryxm",
    'consumer_secret' => "PaBMpshMfcDd6CDCQSPTLMvZXveNz5NaXS0MWrmB3jRfokS3JW"
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