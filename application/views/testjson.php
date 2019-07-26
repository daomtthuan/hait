<html>

<head>

</head>

<body>

	<div>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<script>
		var url = "http://localhost:8080/hait/api/get_value";
		$.getJSON(url, function (data) {
			data.forEach(element => {
				$("div").append("<strong>" + element.attribute_name + ":</strong> " + element.value + "<br>");
			});
		});
	</script>


</body>

</html>