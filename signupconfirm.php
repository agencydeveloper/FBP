<html>
<head>
  <meta charset="UTF-8">
	<title>USCG HABBO</title>
	<link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="asset/javascript/jquery.particleground.js"></script>
  <script type="text/javascript" src="asset/javascript/demo.js"></script>

  <style>
input[type=text], input[type=password] 
{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #808080;
  color: black;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}
</style>

</head>

<body>
<div id="particles"><canvas class="pg-canvas" width="982" height="754" style="display: block;"></canvas>
  <div id="intro" style="margin-top: -357.5px;">

    <br> <div align="center"><img src="mil.png" height="208" width="220" ></div>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Thank You!</strong> You have completed your sign up sucessfully. Kindly login to continue.
</div>

<form action="loginconnect.php" method="post">

<div class="box black">
<div align="center">
  <br>
<h2 style="color:black">User Login Form</h2>
    <div class="container">
      <input type="text" placeholder="Enter Habbo Username" name="hname">
        <br>
      <input type="password" placeholder="Enter Password" name="password">
        <br><br>
      <button type="submit" name="submit" ><strong>Login</strong></button><br><br>
      <label>
        <input style="color:black" type="checkbox" unchecked="unchecked" name="remember"> Remember me
      </label>
    </div>
  </div>
</div>
</form>




</body></html>