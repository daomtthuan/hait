<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/theme.min.css" rel="stylesheet">

</head>

<body id="page-top">



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/theme.min.js"></script>

  <script>
    $.getJSON("ajax/test", function (data) {
      var items = [];
      $.each(data, function (key, val) {
        items.push("<li id='" + key + "'>" + val + "</li>");
      });

      $("<ul/>", {
        "class": "my-new-list",
        html: items.join("")
      }).appendTo("body");
    });
  </script>
</body>

</html>