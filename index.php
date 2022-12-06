




<!DOCTYPE html>
<html>
  <head>
    <title>Simple Image Cropper Example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Css files-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-example.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.Jcrop.min.css" />

    <!-- Js files-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.Jcrop.js"></script>
    <script type="text/javascript" src="scripts/jquery.SimpleCropper2.js"></script>
  </head>
  <body>
    <div class="simple-cropper-images">
      <h1>Simple Image Cropper Example</h1>
      <div id="carbon-block"></div>
<div>
</div>
      <p class="lead">A simple jQuery image cropper plugin that allows you to crop an image to a specific dimension on the client side.</p>
      <div class="cropme" style="width: 405px; height: 200px;"></div>
      <div class="cropme" style="width: 405px; height: 200px;"></div>
      <div class="cropme" style="width: 200px; height: 405px;"></div>
      <div class="cropme" style="width: 200px; height: 200px;"></div>
      <div class="cropme" style="width: 200px; height: 200px;"></div>
      <div class="cropme" style="width: 200px; height: 200px;"></div>
      <div class="cropme" style="width: 610px; height: 200px;"></div>
      <div class="clear"></div>
      <script>
        // Init Simple Cropper
        $('.cropme').simpleCropper();
      </script>

    </div>
</div>	
  </body>
</html>
