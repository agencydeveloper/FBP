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

  <style>
input[type=text], input[type=password], input[type=date], input[list=ranks]
{
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  width: 25%;
}

input[type=submit]
 {
  background-color: #808080;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  width: 15%;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		$('form input[type="submit"]').prop("disabled", true);
		$(".agree").click(function(){
            if($(this).prop("checked") == true)
            {
                $('form input[type="submit"]').prop("disabled", false);
            }
            else if($(this).prop("checked") == false)
            {
                $('form input[type="submit"]').prop("disabled", true);
            }
        });
    });
</script>
</head>

<body>
<div id="particles"><canvas class="pg-canvas" width="982" height="754" style="display: block;"></canvas>
  <div id="intro" style="margin-top: -357.5px;">

    <br> <div align="center"><img src="mil.png" height="208" width="220" ></div>

<form action="statusconnect.php" method="POST"> 

          <div class="box black">
<div align="center">
  <br>
<h2 style="color:white">Employee Rank Entry Form</h2>
    <div class="container">
      <input  type="text" name="habboname" placeholder=" Habbo Name " required>
        <br>
        <input list="ranks" name="status" placeholder= " Status " >
        <datalist id="ranks">
            <option value="Verified">
            <option value="Ban">
        </datalist>
        <br>
        <input  type="text" name="updatedby" placeholder=" Updated By " value="Updated By-   <?php echo htmlentities($_SESSION["hname"],ENT_QUOTES, 'UTF-8'); ?>" disabled > <br>
        <input type="checkbox" class="agree"> I have checked the Entry Form Carefully.
        <br>
        <input type="submit" name="submit" value="Submit">
      
    </div>
  </div>
</div>
</form>


</body></html>