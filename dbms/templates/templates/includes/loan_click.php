
<?php
	include_once 'log.php';

	$roll_no = $_POST['roll_no'];
	$loan_no = $_POST['loan_no'];
	$password = $_POST['password'];
	$account_no = $_POST['account_no'];

	$amount_taken = $_POST['amount_taken'];
	$amount_remaining = $_POST['amount_remaining'];
	$date_of_issue = $_POST['date_of_issue'];

	$total_loan_time = $_POST['total_loan_time'];
	$amount_paid = $_POST['amount_paid'];
	


 $sql = "INSERT INTO loan_ongoing VALUES ($roll_no, '$loan_no', '$password', '$account_no', $amount_taken, $amount_remaining, '$date_of_issue',  $total_loan_time, $amount_paid);";
  
  mysqli_query($conn, $sql);

  header("Location: ../home.php?click=sucess");