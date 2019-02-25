
<?php
	include_once 'log.php';

	$roll_no = $_POST['roll_no'];
	$name = $_POST['name'];
	$mobile_no = $_POST['mobile_no'];

 $sql = "INSERT INTO basic_user_details(roll_no,name, mobile_no) VALUES ($roll_no, '$name', '$mobile_no');";
  mysqli_query($conn, $sql);

  header("Location: ../new_user.php?click=sucess");
