<?php 

  require_once '../connect.php';
  require_once 'session.php';


if (isset($_POST['Save'])){


                    $query = $conn->query("SELECT * FROM players WHERE  id= '$_REQUEST[id]' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();
	       

$Team_Name = htmlentities($_POST['Team_Name'], ENT_QUOTES);
$DISTRICT = htmlentities($_POST['DISTRICT'], ENT_QUOTES);
$Passsport_Name = htmlentities($_POST['Passsport_Name'], ENT_QUOTES);
$Passport_No = htmlentities($_POST['Passport_No'], ENT_QUOTES);
$QID = htmlentities($_POST['QID'], ENT_QUOTES);


$Validity = htmlentities($_POST['Validity'], ENT_QUOTES);
$Bday = htmlentities($_POST['Bday'], ENT_QUOTES);
$Sponsor = htmlentities($_POST['Sponsor'], ENT_QUOTES);
$Tel = htmlentities($_POST['Tel'], ENT_QUOTES);
$Address = htmlentities($_POST['Address'], ENT_QUOTES);




$Dpassport = $fetch['Passport_Name'];
$Dqid = $fetch['QID_Name'];

$Back_Dpassport = $fetch['Passport_Back'];
$Back_Dqid = $fetch['QID_Back'];



$ExtPhoto = 'Photo-';
$ExtPassport = 'Passport-Front-';
$ExtPassport_B = 'Passport-Back-';

$ExtQID = 'QID-Front-';
$ExtQID_B = 'QID-Back-';
$ext = '-';


$Photo_Go = "No";

$Passport_Go = "No";
$Back_Passport_Go = "No";

$QID_Go = "No";
$Back_QID_Go = "No";
 
// Photos --------------------------------------------------------------------------------------------//



		if($_FILES['myimage']['name'] == ""){
			$filename = $fetch['image_name'];
			$image = $fetch['image'];
			$new_filename =$fetch['image_name'];
			$Photo_Go = "No";
		}else{

			    // $name = $_FILES['myimage']['name'];
				
				// $target_dir = "upload/";
				$target_file = $target_dir . basename($_FILES["myimage"]["name"]);

				// Select file type
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Valid file extensions
				$extensions_arr = array("jpg","jpeg","png","gif");


				$filename = $_FILES['myimage']['name'];
				$file_ext = substr($Passport_No, strripos($Team_Name, '.'));

				
				$tempFile = $_FILES['myimage']['tmp_name'];
				$new_filename = $ExtPhoto.$Passport_No.'.'.$imageFileType;

				$targetFile = '../Photos/'.$new_filename;
               
               $Photo_Go = "Yes";




				 if( in_array($imageFileType,$extensions_arr) ){
			            
			            // Convert to base64 
			            $image_base64 = base64_encode(file_get_contents($_FILES['myimage']['tmp_name']) );
			            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
        
			        }



   }
					
// Photos --------------------------------------------------------------------------------------------//

// Passport --------------------------------------------------------------------------------------------//

		if($_FILES['Passport']['name'] == ""){
			$final_file = $fetch['Passport_Name'];
			$file_type = $fetch['Passport_File'];
			$Passport_Go = "No";
		}else{
				$file = rand(1000,100000)."-".$_FILES['Passport']['name'];
				$file_loc = $_FILES['Passport']['tmp_name'];
				$file_size = $_FILES['Passport']['size'];
				$file_type = $_FILES['Passport']['type'];

				$target_file2 = $target_dir . basename($_FILES["Passport"]["name"]);
				$PASSfile = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$final_file = $ExtPassport.$Passport_No.'.'.$PASSfile;
				$folder='../files/'.$final_file;

				// new file size in KB
				$new_size = $file_size/1024;  

				$Passport_Go = "Yes";

	  }	



	  		// Back ------------------------------------------//
	           	if($_FILES['Passport_Back']['name'] == ""){
					$Back_final_file = $fetch['Passport_Back'];
					$Back_Passport_Go = "No";
				}else{
						$Back_file = rand(1000,100000)."-".$_FILES['Passport_Back']['name'];
						$Back_file_loc = $_FILES['Passport_Back']['tmp_name'];
						$Back_file_size = $_FILES['Passport_Back']['size'];
						$Back_file_type = $_FILES['Passport_Back']['type'];

						$Back_target_file2 = $Back_target_dir . basename($_FILES["Passport_Back"]["name"]);
						$Back_PASSfile = strtolower(pathinfo($Back_target_file2,PATHINFO_EXTENSION));
		               
		                // $type =$_FILES['type'];

						$Back_final_file = $ExtPassport_B.$Passport_No.'.'.$Back_PASSfile;
						$Back_folder='../files/'.$Back_final_file;

						// new file size in KB
						$Back_new_size = $file_size/1024;  

						$Back_Passport_Go = "Yes";

			  }	

// Passport --------------------------------------------------------------------------------------------//			

// QID --------------------------------------------------------------------------------------------//

	  if($_FILES['QID']['name'] == ""){
			$Q_final_file = $fetch['QID_Name'];
			$Q_file_type = $fetch['QID_File'];
			$QID_Go = "No";
		}else{
				
				$Q_file = rand(1000,100000)."-".$_FILES['QID']['name'];
				$Q_file_loc = $_FILES['QID']['tmp_name'];
				$Q_file_size = $_FILES['QID']['size'];
				$Q_file_type = $_FILES['QID']['type'];

				$Q_target_file2 ='../files/' . basename($_FILES["QID"]["name"]);
				$Q_PASSfile = strtolower(pathinfo($Q_target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$Q_final_file = $ExtQID.$Passport_No.'.'.$Q_PASSfile;
				$Q_folder='../files/'.$Q_final_file;

				// new file size in KB
				$Q_new_size = $Q_file_size/1024;  
				$QID_Go = "Yes";

	 }		     

	 				// Back ------------------------------------------------------------//
	 				if($_FILES['QID_Back']['name'] == ""){
						$Back_Q_final_file = $fetch['QID_Back'];
						$Back_QID_Go = "No";
					}else{
							
							$Back_Q_file = rand(1000,100000)."-".$_FILES['QID_Back']['name'];
							$Back_Q_file_loc = $_FILES['QID_Back']['tmp_name'];
							$Back_Q_file_size = $_FILES['QID_Back']['size'];
							$Back_Q_file_type = $_FILES['QID_Back']['type'];

							$Back_Q_target_file2 ='../files/' . basename($_FILES["QID_Back"]["name"]);
							$Back_Q_PASSfile = strtolower(pathinfo($Back_Q_target_file2,PATHINFO_EXTENSION));
			               
			                // $type =$_FILES['type'];

							$Back_Q_final_file = $ExtQID_B.$Passport_No.'.'.$Back_Q_PASSfile;
							$Back_Q_folder='../files/'.$Back_Q_final_file;

							// new file size in KB
							$Back_Q_new_size = $Back_Q_file_size/1024;  
							$Back_QID_Go = "Yes";

				 }		 

// QID --------------------------------------------------------------------------------------------//			
	


				if( $Photo_Go == "Yes")
				{
                unlink('../Photos/'.$fetch['image_name']);
				move_uploaded_file($tempFile, $targetFile);		 	// Image ------//
				}


				if( $Passport_Go == "Yes")
				{
                unlink('../files/'.$Dpassport);
				move_uploaded_file($file_loc,$folder);   	// Passport ------//
				}


				if( $Back_Passport_Go == "Yes")
				{
                unlink('../files/'.$Back_Dpassport);
				move_uploaded_file($Back_file_loc,$Back_folder);   	// Passport Back ------//
				}



				if( $QID_Go == "Yes")
				{
                 unlink('../files/'.$Dqid);
				move_uploaded_file($Q_file_loc,$Q_folder); 	// QID ------//

				}



				if( $Back_QID_Go == "Yes")
				{
                 unlink('../files/'.$Back_Dqid);
				move_uploaded_file($Back_Q_file_loc,$Back_Q_folder); 	// QID Back ------//

				}



$conn->query("UPDATE `players` SET `Team_Name` = '$Team_Name', `District` = '$DISTRICT', `Name_in_Passport` = '$Passsport_Name', `Passport_No` = '$Passport_No', `Qatar_ID` = '$QID', `Validity` = '$Validity', `Date_of_Birth` = '$Bday', `Name_of_Sponsor` = '$Sponsor', `Tel` = '$Tel', `Address` = '$Address', `image_name` = '$new_filename', `image` = '$image', `Passport_Name` = '$final_file', `Passport_Back` = '$Back_final_file', `Passport_File` = '$file_type', `QID_Name` = '$Q_final_file', `QID_Back` = '$Back_Q_final_file', `QID_File` = '$Q_file_type' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());


				

      header('location:Save_Player_Edit_Msg.php');
       
		}

?>