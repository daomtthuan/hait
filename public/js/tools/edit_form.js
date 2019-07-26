var url = "http://localhost:8080/hait/api/get_value";
$.getJSON(url, function (data) {
  data.forEach(element => {
    $("div").append("<strong>" + element.attribute_name + ":</strong> " + element.value + "<br>");
  });
});