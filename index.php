<?php
$conn=new PDO('mysql:host=localhost; dbname=project1', 'root', '') or die(mysql_error());

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_FILES['fileToUpload'])){
	$file_name = $_FILES['fileToUpload']['name'];
	$file_tmp = $_FILES['fileToUpload']['tmp_name'];
	move_uploaded_file($file_tmp, "upload/$file_name");
	
	$query = "INSERT INTO upload(name) VALUES('$file_name')";
	$ros = mysqli_query($link, $query);
}

?>
<html>
<head>
<title>Upload and Download Files</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
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
      <li><a href="home.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1><p>Upload  And  Download Files</p></h1>	
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
					<input type="file" name="fileToUpload" id="photo" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</form>
		<br />
		<br />
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $name;?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>

</body>
</html>