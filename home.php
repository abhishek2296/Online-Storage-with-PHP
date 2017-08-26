<?php require 'dbconnection.php'; ?>
<html>
<head>
<title>
HOME
</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/validate.js" ></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Director</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<?php include("project_signup.php");
?>

</body>
</html>