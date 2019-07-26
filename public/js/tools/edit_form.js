$.getJSON(url, function (data) {
  data.forEach(element => {
    $("#"+element.attribute_name).val(element.value);
  });
});