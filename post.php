<?php
	if(isset($_POST['name']) || isset($_POST['age'])){
		echo "Hello ".$_POST['name']."<br>";
		echo "Your age is ".$_POST['age']."<br>";
		
		exit();	
	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST Method</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method="POST">
		Name : <input type="text" name="name">
		<br><br>
		Age : <input type="text" name="age">
		<br><br>
		<input type="submit" value="Submit">	
	</form>


</body>
</html>