<!doctype html>
<html ng-app="TweetApp">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tweet Searcher</title>
<link rel="manifest" href="icons/manifest.json">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/styles/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="assets/styles/main.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
<div class="center animated fadeInDown" ng-controller="SearchController">
	<form name="keyForm">
		<span class="text-center"><h3>Tweets Search!</h3></span>
		<div class="input-group">
	      <input type="text" class="form-control in" id="qd" ng-model="keyd" placeholder="Search For...." autocomplete="off">
	      <span class="input-group-btn">
	        <button class="btn btn-primary pull-right in-b" ng-click="getdata()">Search</button>
	      </span>

	    </div>
	</form>
	
	<div class="tw-con">
		<h5 class="text-center">{{status}}</h5>
		<div class="loading">
			<img src="assets/img/rolling.gif">
		</div>
        <div class="animated fadeInUp tw-cards" ng-repeat="x in tweets track by $index" >
       		<h5><b>{{x.user.name}}</b></h5>
       		<hr>
        	<h5>{{x.text}}<h5>
        	<small><b>Tweeted At:</b> {{x.created_at}}</small>
        </div>

   	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script> -->
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/controller.js" type="text/javascript"></script>
</body>
</html>