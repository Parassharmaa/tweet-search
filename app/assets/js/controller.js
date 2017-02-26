app.controller('SearchController', function($scope, $http) {
		$scope.tweets = [];
		$scope.keyd = "";
		$scope.getdata = function() {
			if($scope.keyd.length !="") {
				$scope.tweets = "";
				var url = "search.php?query="+$scope.keyd;
				$('.loading').show();
				 $http.get(url).then(function(response) {
        			$scope.tweets = response.data.statuses;
					$scope.status = "";
					$('.loading').hide();
				})
			}

			else {
				$scope.status = "Please enter something";
			}
		}
})
	