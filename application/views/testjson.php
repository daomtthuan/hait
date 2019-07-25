<html>
<head>
	<title>Angular JS Includes</title>

	<style>
		table, th , td {
			border: 1px solid grey;
			border-collapse: collapse;
			padding: 5px;
		}
		table tr:nth-child(odd) {
			background-color: #f2f2f2;
		}
		table tr:nth-child(even) {
			background-color: #ffffff;
		}
	</style>
</head>

<body>
<h2>AngularJS Sample Application</h2>
<div ng-app = "" ng-controller = "studentController">

	<table>
		<tr>
			<th>Name</th>
			<th>Roll No</th>
		</tr>

		<tr ng-repeat = "student in students">
			<td>{{ student.attribute_name }}</td>
			<td>{{ student.value }}</td>
		</tr>
	</table>
</div>

<script>
	function studentController($scope,$http) {
		var url = "http://localhost:8080/hait/api/get_value";

		$http.get(url).then( function(response) {
			$scope.students = response.data;
		});
	}
</script>

<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js">
</script>

</body>
</html>
