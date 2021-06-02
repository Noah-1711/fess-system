
    <?php
 
    
 if(!empty($_POST['fullname']) || !empty($_POST['email']))
 {
 
 // echo "<img src='$path' />";
 $name = $_POST['fullname']; 
 $email = $_POST['email']; 
 $contact= $_POST['contact']; 
 $address= $_POST['address']; 
 $password= $_POST['password'];
 
 //include database configuration file
 include_once './include/connection.php';

 
 $query = "select * from tbl_users  where contact = '$contact'";
 $response = array();
 if($result=mysqli_query($con, $query));
 {
     if(mysqli_num_rows($result) > 0){

        //  while($row=mysqli_fetch_assoc($result))
        //  {
        //      $response[]=$row;
        //  }
         // echo $response;
         
         $response['status'] = 3; 
         $response['message'] = 'Already Exists'; 

         header('Content-Type: application/json');
 
     }
     else{
        $insert = $con->query("INSERT INTO tbl_users(name, contact, role, status, email, address, password) VALUES ('".$name."','".$contact."', 'user', 'inactive', '".$email."', '".$address."','".$password."')"); 
        // echo $insert?'ok':'err';
       
            $response['status'] = 1; 
            $response['message'] = 'Form Submitted Successfully!'; 
     }
 }

 //insert form data in the database
 
//  $response['status'] = 4; 
//      $response['message'] = 'Error in select query'; 

 }


 else 
 {
     $response['status'] = 0; 
     $response['message'] = 'Error'; 
 
 }
 


 echo json_encode($response);
 ?>