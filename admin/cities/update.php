<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>



<?php

if(isset($_POST['submit']))
{
	$city_id = $_POST['city_id'];
	$name = sanitizeString($_POST['name']);
	$notEmpty = checkEmpty($name);

	if($notEmpty)
	{
		$less = checkLess($name,3);
		if($less)
		{
			$sql = "UPDATE cities SET `city_name`='$name' WHERE `city_id`='$city_id' ";
			$success_message = db_update($sql);
			header( "refresh:2;url=".BUA."cities");
		}
		else
		{
			$error_message = "Please Type Correct City";
		}
	}
	else
	{
		$error_message = "Please Type City Name";
	}

	require BL.'functions/messages.php';
}


?>





<?php require BLA.'inc/footer.php';  ?>





