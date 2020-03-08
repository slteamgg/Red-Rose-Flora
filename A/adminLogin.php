<!DOCTYPE html>
<html>
<head>

<title>Admin Login From</title>
<link rel="stylesheet" type="text/css" href="styles/adLogin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">


</head>

<body background="pictures/background.jpg">

<div class="Text1"><a class="Text2" href="admininterface.php">Back <i class="fas fa-sign-out-alt"></i></a></div>

<div class="image">

<center>
<h1>Admin Login Form</h1>
</center>

<br>

<!--user login begins-->


<center>
<div class="login">

<h2>Login Here</h2>


<form method='POST' action='login.php'>

<p>User Name</p>
<input type = "text" id="user" name="username" placeholder="Enter Username" required>

<P>Password</p>
<input type = "password" id="pwd" name="password" placeholder="Enter Password" required>

<a href="#">Forget Your Password?</a><br>

<input type="submit" name="" value="Login">
</form>

</div>
</center>

<!--user login ends-->
</div>


</body>
</html>