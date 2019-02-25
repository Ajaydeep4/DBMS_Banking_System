
<?php
	include_once 'log.php';

	$account_no = $_POST['account_no'];
	$deposit = $_POST['deposited'];
	$password = $_POST['password'];

	$date = $_POST['date'];
$sql1 = "select amount_deposited from deposit_account where account_no=$account_no;";

$a = mysqli_query($conn, $sql1);

$a=$a+$deposit;

$sql = "update deposit_account 
	set amount_deposited=$a";  
  mysqli_query($conn, $sql);

  header("Location: ../home.php?click=sucess");