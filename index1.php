<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>


	<?php


if (isset ($_POST['user_name']) ) 

{
	$userName = $_POST['user_name'];

    echo 'username : ' .$userName;

}
else{
	echo "not submitted";
}

?>
   
   <form method="POST" action="#" >
   	   <label>username</label>
   	   <br>
   	   <input type="text" name="user_name">
   	   <br>
   	   <label>password</label>
   	   <br>
   	   <input type="password" name="password" >
   	   <input type="submit" value="submit" name="button">

   </form>



</body>
</html>

