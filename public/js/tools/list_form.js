$.getJSON(json, function (data) {
  data.forEach(function (element, index) {
    var row = '<tr><th scope="row">' + eval(index + 1) + '</th>';
    row += '<td>' + element.date_create + '</td>';
    row += '<td>' + element.status + '</td>';
    row += '<td>' + element.msba + '</td>';
    row += '<td>' + element.ho_ten_bn + '</td>';
    row += '<td>' + element.nam_sinh + '</td>';
    row += '<td>' + element.chan_doan_xac_dinh + '</td>';
    row += '<td><a class="btn btn-primary" href="' + edit + '/' + element.form_id + '" role="button">Chỉnh sửa</a></td>';
    $("tbody").append(row);
  });
});