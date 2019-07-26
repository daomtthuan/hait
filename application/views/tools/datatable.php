<!-- DataTales Example -->
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>


<div class="card shadow mb-4" ng-app="databaseApp" ng-controller = "databaseController">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th>Name</th>
					<th>Position</th>
					<th>Office</th>
					<th>Age</th>
					<th>Start date</th>
					<th>Salary</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Name</th>
					<th>Position</th>
				</tr>
				</tfoot>
				<tbody >
				<tr ng-repeat = "item in list">
					<td>{{ item. }}</td>
					<td>{{ student.value }}</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--
<script src="<?php echo base_url('public/js/app.js') ?>"></script>
-->
<script>
	var databaseApp = angular.module("databaseApp", []);
	databaseApp.controller("databaseController", function($scope,$http) {
		var url = "<?php echo base_url('test/ajax') ?>";
		$http.get(url).then( function(response) {
			$scope.list = response.data;
		});
	});

</script>

