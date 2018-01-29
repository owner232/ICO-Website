<?php

 //echo $password=base64_decode($row);exit;
	error_reporting(0);
	$re=file_get_contents('../Bin/Configuration.php');
	$res=explode('\'',$re);
	

	 $hostname='localhost';

	 $username='root';

	 $password='';

	 $dbname  ='twinkasfinal';

	$mysqli = new mysqli($hostname, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	if($mysqli) 
	{

		

		$query = "SELECT * FROM users_old ORDER BY user_id ASC";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if($result->num_rows > 0) 
		{

			if($result->num_rows!='0')
			{
				
				while($row = $result->fetch_array(MYSQLI_ASSOC)) 
				{

					//assignement

						$user_id=$row['user_id'];
						//$username=$row['username'];
						$full_name=$row['full_name'];
						$mobile_number=$row['mobile_number'];
						$country=$row['country'];
						$email=$row['email'];
					    $password=base64_decode($row['password']);
					    $passwordnw=md5($password);
	   					$status=$row['status'];
	   					$bank_name=$row['bank_name'];
	   					$bank_account_number=$row['bank_account_number'];
	   					$bank_account_name=$row['bank_account_name'];
	   					$user_type=$row['user_type'];
                        $date_of_join=$row['date_of_join'];
       					$digits = 4;
	 					$activation_pin= rand(pow(10, $digits-1), pow(10, $digits)-1);

					



					//insert users
$query1 = "SELECT * FROM userschange where username='".$full_name."'";
$result1 = $mysqli->query($query1);
//print_r($result);exit;
if($result1->num_rows == '0')
{
 	
 					 $profileimage='assets/global/images/noimage.png';
     				 $sql_matrix="INSERT INTO userschange(user_id,username,full_name,mobile_number,email,password,status,
				 	country,bank_name,bank_account_number,bank_account_name,user_type,date_of_join,profileimage,user_current_package_id)
					 VALUES('".$user_id."','".$full_name."','".$full_name."','".$mobile_number."','".$email."','".$passwordnw."','".$status."','".$country."','".$bank_name."','".$bank_account_number."','".$bank_account_name."','".$user_type."','".$date_of_join."','".$profileimage."','1')";				
					if($mysqli->query($sql_matrix))
		             {
			
					  $user_idn=$user_id;
					  
					        $invitation_sponsor_id='0';
					    
		             }





					//insert queue 

		             $matrix_width='2';
		             $datecreated=date('Y-m-d H:i:s');
		             $sponsor_assigned_status='0';
		            for ($i=0; $i <$matrix_width ; $i++) { 
                	$sql_matrix1="INSERT INTO user_queue(user_id,invitation_sponsor_id,package_id,payment_status,createdon,package_expiry_date,sponsor_assigned_status,
					 	package_activation_status)
					 VALUES('".$user_id."','".$invitation_sponsor_id."','".$package_id."','0','".$datecreated."','".$package_expiry_date."','".$sponsor_assigned_status."','1')";
					
				      $mysqli->query($sql_matrix1);
			       }


}

					///updattion from user donation
           
				$query2 = "SELECT * FROM user_donation_details where user_id='".$user_id."'";
                $result2 = $mysqli->query($query2);
                if($result2->num_rows!='0')
			{	
                $sql_matrix2="UPDATE user_queue SET  
		   					sponsor_activation_status='1'
		   					WHERE user_id='".$user_id."'";
		   					
		   	        $mysqli->query($sql_matrix2);
			         
            }
				}
			}

		}


exit;
	

	}


	


		
?>	
