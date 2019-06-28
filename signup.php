<html><head>
  <meta charset="UTF-8">
	<title>MDF HABBO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="asset/javascript/jquery.particleground.js"></script>
  <script type="text/javascript" src="asset/javascript/demo.js"></script>

  <style>
input[type=text], input[type=password] 
{
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  width: 18%;
}

button {
  background-color: #808080;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
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

<form action="signupconnect.php" method="POST"> 

          <div class="box black">
<div align="center">
  <br><br>
<h2 style="color:black">Sign-Up Form</h2>
    <div class="container">
      <input  type="text" name="name" placeholder=" Name " required>
        <br>
        <input  type="text" name="hname" placeholder=" Habbo Username " required>
        <br>
        <input  type="text" name="email" placeholder=" E-mail " required>
        <br>
     <input  type="password" name="pwd" placeholder=" Password " required>
        <br>
        <input  type="password" name="cpwd" placeholder=" Confirm Password " required>
        
        <br><br>
        <button id="login" type="submit" name="submit" value="REGISTER"><strong>Register</strong></button>
      
    </div>
  </div>
</div>
</form>


</body></html>