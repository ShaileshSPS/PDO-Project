/*
* @author : Shailesh
*/
<?php 
	session_start();
	if($_SESSION['id'] != session_id()) {
		header('location: index.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Complete user registration system in php and MySQL using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Welcome to <strong>localhost</strong> </h2><br>
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<div class="col-md-10">Hello, <?php echo $_SESSION['name']; ?></div>
				<div class="col-md-2"><a href="logout.php">logout</a></div>
			</div>
		</div>
	</div>
</body>
</html>