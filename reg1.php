<?php 
    //error_reporting(0);
	$conn=oci_connect("DDB","ddb","localhost/xe");
    If (!$conn)
        echo 'Failed to connect to Oracle';
    else
        echo 'hello there!!';
 
      // Retrieve the posted new location information.
      $Name = $_POST['name']; 
      $Username = $_POST['username'];
      $Password = $_POST['password']; 
	  $Date = $_POST['dob']; 
	  $Gender = $_POST['gender']; 
	  $Area = $_POST['area']; 
	  $Aadhar = $_POST['aadhar'];
		
	 // // $ = $_POST['City']; 
      // $StateOrProvince = $_POST['StateOrProvince'];
      // $CountryCode = $_POST['CountryCode'];
      // // Insert the location information into the LOCATIONS table
      // $s = oci_parse($c, "insert into locations
                           // (location_id, street_address, postal_code,
                            // city, state_province, country_id)
                           // values ($LocationID, '$StreetAddress', '$PostalCode',
                                   // '$City', '$StateOrProvince', '$CountryCode')");
      //$result = oci_execute($s);
	 
	  
	  if($Gender=='Female'){
		 
			  $conn=oci_connect("fvoters","fvoters","localhost/xe");
			  $sql = "INSERT INTO fvoters (name,username,password,date_of_birth,gender,area,aadhar_number) 
		values('".$Name."','".$Username."','".$Password."' ,  to_date('". $Date ."','yyyy-mm-dd hh24:mi:ss'),'".$Gender."','".$Area."','".$Aadhar."')";
		
		$statement=oci_parse($conn,$sql);
		if(!statement)
		{
			echo "not inserted";
		}
		oci_execute($statement,OCI_DEFAULT);
		//oci_execute ($statement ,OCI_COMMIT_ON_SUCCESS  );
		print "Inserted into db";
		oci_commit($conn);
		
	
	  }
		else{
			  $conn=oci_connect("mvoters","mvoters","localhost/xe");
			$sql = "INSERT INTO mvoters (name,username,password,date_of_birth,gender,area,aadhar_number) 
		values('".$Name."','".$Username."','".$Password."' ,  to_date('". $Date ."','yyyy-mm-dd hh24:mi:ss'),'".$Gender."','".$Area."','".$Aadhar."')";
		$statement=oci_parse($conn,$sql);
		if(!statement)
		{
			echo "not inserted";
		}
		oci_execute($statement,OCI_DEFAULT);
		//oci_execute ($statement ,OCI_COMMIT_ON_SUCCESS  );
		print "Inserted into db";
		oci_commit($conn);
		oci_close($conn);
	
		}
		 $conn=oci_connect("DDB","ddb","localhost/xe");
	
		   $sql = "INSERT INTO voter (name,username,password,date_of_birth,gender,area,aadhar_number) 
		values('".$Name."','".$Username."','".$Password."' ,  to_date('". $Date ."','yyyy-mm-dd hh24:mi:ss'),'".$Gender."','".$Area."','".$Aadhar."')";
		$statement=oci_parse($conn,$sql);
		if(!statement)
		{
			echo "not inserted";
		}
		oci_execute($statement,OCI_DEFAULT);
		//oci_execute ($statement ,OCI_COMMIT_ON_SUCCESS  );
		print "Inserted into db";
		oci_commit($conn);

	   
      // Display an appropriate message on either success or failure
      // if ($result)
      // { 
         // echo "<p>Location successfully inserted!</p>"; 
         // oci_commit($c);
      // }
      // else
      // { 
         // echo "<p>There was a problem inserting the location!</p>";
         // var_dump(oci_error($s));
      // }

      // oci_close($c);
    
 // include "insert_location.php";
	oci_close($conn);
?>
 
