<?php

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
					//echo "fhdh";
					


							$user_id=$row['user_id'];
							//$username=$row['username'];
							$full_name=$row['full_name'];
							$mobile_number=$row['mobile_number'];
							$country=$row['country'];
							$email=$row['email'];
						    $password=base64_encode($row['password']);
						    $passwordnw=md5($password);
		   					$status=$row['status'];
		   					$bank_name=$row['bank_name'];
		   					$bank_account_number=$row['bank_account_number'];
		   					$bank_account_name=$row['bank_account_name'];
		   					$user_type=$row['user_type'];
                            $date_of_join=$row['date_of_join'];
            $digits = 4;
		  $activation_pin= rand(pow(10, $digits-1), pow(10, $digits)-1);
        
/*$query = "SELECT * FROM userschange ORDER BY username='".$full_name."'";
$result = $mysqli->query($query);
//print_r($result);exit;
if($result->num_rows == '0')
{*/
          $profileimage='assets/global/images/noimage.png';
          $sql_matrix="INSERT INTO userschange(user_id,username,full_name,mobile_number,email,password,status,
					 	country,bank_name,bank_account_number,bank_account_name,user_type,date_of_join,profileimage,user_current_package_id)
					 VALUES('".$user_id."','".$full_name."','".$full_name."','".$mobile_number."','".$email."','".$passwordnw."','".$status."','".$country."','".$bank_name."','".$bank_account_number."','".$bank_account_name."','".$user_type."','".$date_of_join."','".$profileimage."','1')";
					
					if($mysqli->query($sql_matrix))
                 {
		
    			  $user_idn=$user_id;
    			  
				        $invitation_sponsor_id='0';
				    
                 }
           //  }


$query = "SELECT * FROM user_queue where sponsor_activation_status='1' and package_activation_status='1' and package_id='1' and payment_received_from='1' orderby queue_id";	
			      $result= $mysqli->query($query);
			 // print_r($result2);exit;  
	if($result->num_rows > 0) 
		{

			if($result->num_rows!='0')
			{
				
				while($row = $result->fetch_array(MYSQLI_ASSOC)) 
				{
      
			     
			      $queue_id=$row['queue_id'];
			      $payment_sent_to=$row['user_id'];
			      $payment_received_from=$user_id; 

			    }
			    }
			    }  




				$query = "SELECT * FROM site_settings where site_settingskey='package_duration'";	
			      $result= $mysqli->query($query);
			 // print_r($result2);exit;  
	if($result->num_rows > 0) 
		{

			if($result->num_rows!='0')
			{
				
				while($row = $result->fetch_array(MYSQLI_ASSOC)) 
				{
      
			      $packageduration = $row['site_settingsvalue'];
			    }
			    }
			    }  
			    // $datecreated =CI_Controller::getDateTime();
			      //add package  hour to time
		//$package_expiry_date = date('Y-m-d H:i:s',strtotime('+'.$packageduration.' hour',strtotime($datecreated)));

			      //get package details

$query = "SELECT * FROM package where package_id='1'";	
			      $result= $mysqli->query($query);
			// print_r($result);exit;  
	if($result->num_rows > 0) 
		{

			if($result->num_rows!='0')
			{
				
				while($row = $result->fetch_array(MYSQLI_ASSOC)) 
				{

                  $matrix=$row['matrix'];
			      $price =$row['price'];
			      $matrix_details= explode('*', $matrix); 
			      $matrix_width =$matrix_details[0];
			      $matrix_height =$matrix_details[1];
			     
			    }
			    }
			    }  

			     
			      $sponsor_assigned_status='0';

			        if($payment_sent_to>0){

			       	$transaction_id="#".substr(number_format(time() * rand(),0,'',''),0,9)."";

			          
			          //receiver updation
			       	$sql_matrix="UPDATE user_queue SET payment_received_from='".$payment_received_from."', 
		   					payment_status='-1',transaction_id='".$transaction_id."',payment_request_date='".$datecreated."'
		   					WHERE queue_id='".$queue_id."'";
		   					
		   	        $mysqli->query($sql_matrix);
			         
			  
			          $sponsor_assigned_status='1';

  					}



			      for ($i=0; $i <$matrix_width ; $i++) { 
                 $sql_matrix="INSERT INTO user_queue(user_id,invitation_sponsor_id,package_id,payment_status,createdon,package_expiry_date,sponsor_assigned_status,
					 	package_activation_status)
					 VALUES('".$user_id."','".$invitation_sponsor_id."','".$package_id."','0','".$datecreated."','".$package_expiry_date."','".$sponsor_assigned_status."','1')";
					
				      $mysqli->query($sql_matrix);
			       }

				}

			}

		}


	

	}


	


		
?>	
