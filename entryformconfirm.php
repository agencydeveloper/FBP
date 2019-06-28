<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
  <meta charset="UTF-8">
	<title>MDF HABBO</title>
  <link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="asset/javascript/jquery.particleground.js"></script>
  <script type="text/javascript" src="asset/javascript/demo.js"></script>
</head>

<body>
<div id="particles"><canvas class="pg-canvas" width="982" height="754" style="display: block;"></canvas>
  <div id="intro" style="margin-top: -357.5px;">
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Thank You!</strong> the data is successfully entered.
</div>
<h3>Welcome <?php echo htmlentities($_SESSION["hname"],ENT_QUOTES, 'UTF-8'); ?> to USCG habbo official site.</h3>

 <div class="row">
   <div class="col-md-2">
    </div>
      <div class="col-md-8">
        <img src="mil.png" height="208" width="220">
          </div>
            </div>

  <div class="navbar" align="left">
    <div align="left">
    <a href="pts.php">PTS</a>
   <a href="entryform.php">ENTRY FORM</a>
  </div>
</div>


<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
   <h1><strong>United States Coast Guard</strong></h1><br>

</div>
</div>
</div>
</div>
</body>
</html>