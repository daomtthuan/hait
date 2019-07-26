$.getJSON(jsonUrl, function (data) {
  var index = 0;
  data.forEach(element => {
    var row = '<tr><th scope="row">' + (++index) + '</th>';
    row += '<td>' + element.form_id + '</td>';
    row += '<td>' + element.date_create + '</td>';
    row += '<td>' + element.status + '</td>';
    row += '<td>' + element.msba + '</td>';
    row += '<td>' + element.ho_ten_bn + '</td>';
    row += '<td>' + element.nam_sinh + '</td>';
    row += '<td>' + element.chan_doan_xac_dinh + '</td>';
    row += '<td><a class="btn btn-primary" href="' + editUrl + '" role="button">Chỉnh sửa</a></td>';
    $("tbody").append(row);
  });
});