<?php include('server.php') ?>
<!DOCTYPE html>
<html>
   
   <head>
      <title>Login Page</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
width: 1500px;
margin:10px -10%;
padding:0;
font-family:raleway,arial,helvetica,sans-serif;
background:#808080;
}
.wrapper{
  width:500px;
  height:30%;
  margin: 10% 32% 0 32%;
  background:rgba(20,30,40,0.6);
  padding:50px 0 0 0 ;
  border:25px double ivory;
  border-top-color:transparent;
  animation:3s blink ease-in-out infinite;
  border-bottom-color:transparent;
  box-sizing:padding-box;
  position:center;
  border-radius:28%;
  box-shadow:0px 60px 200px -40px #000;
}
input[type="text"],input[type="password"]{
margin:0px 50px;
padding:5px 15px;
height:30px;
width:250px;
display:block;
color:#fff;
font-size:1.2em;
position:relative;
box-sizing:padding-box;
background:transparent;
border:none;
border-bottom:5px double #fff;

}
input[type="text"],input[type="password"]:focus{
outline:none;
}
input[type="submit"]{
margin:0 110px;
width:150px;
height:35px;
padding:5px;
background:springgreen;
border:1px solid #000;
border-radius:10px;
box-shadow:0px 10px 20px -8px springgreen;
}

p {
  text-align:center;
  font-size:1.2em;
  color:#fff;
  font-weight:bold;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:#808080;
    color: black;
    text-align: center;
}
</style
</head>
<body>
<div class="wrapper">
<center>
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username" required><br>
<input type="password" name="password" placeholder="password" required><br>
<input type="submit" name="login_user" value="Login" >
</form>
</center>
</div>
  <div class="footer">
  <p>201611309 , 201511178 </p>
</div>
</body>
</html>



