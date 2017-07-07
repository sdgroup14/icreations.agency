<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0">
  <meta http-equiv="cleartype" content="on">
  
  <!-- build:remove -->
  <link href="css/style.css" rel="stylesheet">
  <!-- /build -->

  <!-- build:include ../templates/css-link.html -->
  <!-- /build -->

  <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
  <![endif]-->
  <title>Contacts</title>
</head>

<body>
  <div class="content-wrapper">
    <div class="content">
      <?php include __DIR__ . '/views/permanents/header.php'; ?>
      <?php include __DIR__ . '/views/content/contacts/s1.php'; ?>
      <?php include __DIR__ . '/views/content/contacts/s2.php'; ?>
    </div>
      <?php include __DIR__ . '/views/permanents/footer.php'; ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2_6LhSULG58-LHtShe82FcuAcKZuHzxs&callback=initMap"></script>
  
  <!-- build:remove -->
  <script type="text/javascript" src="js/events.js"></script>
  <!-- /build -->

  <!-- build:include ../templates/js-script.html -->
  <!-- /build -->
</body>
</html>
