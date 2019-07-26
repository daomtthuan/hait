var databaseApp = angular.module("databaseApp", []);
databaseApp.controller("databaseController", function($scope,$http) {
	var url = "<?php echo base_url('test/ajax') ?>";
	$http.get(url).then( function(response) {
		$scope.students = response.data;
	});
});
