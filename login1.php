<?php
  
  session_start();
  
  $conn=oci_connect("DDB","ddb","localhost/xe");
    If (!$conn)
        echo 'Failed to connect to Oracle';
    else
        echo 'hello there!!';

	$uname = $_POST["user"];
	$paswd = $_POST["pass"];
	
	
	$_SESSION["USER"] = $uname ;
	
	
//$paswd=md5($paswd);

	$sql = "SELECT password FROM voter WHERE username='$uname'";
	
	if(OCIFetch($stmt)) {
  $ID= OCIResult($stmt,1); //return the data from column 1
}
	//echo $paswd;
//	echo $uname;
//	$sql = "SELECT Password FROM voter WHERE Username='$uname'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		$row = $result->fetch_assoc();
		
		if($row["Password"] == $paswd)
		{
			
			header("location:vote.php");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid credentials. Try Again");';
			echo 'window.location.href="login.php";';
			echo '</script>'; 
		}
	}
oci_close($conn);
?>