<?php
//database connection

$con =mysqli_connect('localhost','root','','GUVI_Database');
if(!$con){
    die(mysqli_error($con));
}
else{
     echo "Connection Successful!!";
}

//login process

if(isset($_POST['Login'])){
    $user_email=$_POST['email'];    
    $user_password=$_POST['pwd'];
    // $user_email = stripcslashes($user_email);  
    //     $user_password = stripcslashes($user_password);  
    //     $user_email = mysqli_real_escape_string($con, $user_email);  
    //     $user_password = mysqli_real_escape_string($con, $user_password);  


        
$select_query="select * from `Reg_db` where Email_id=? and password=? ";
$stmt = $mysqli->prepare($select_query);
$stmt->bind_param('si',$user_email,$user_password);

// $stmt->fetch();
 $stmt->bind_result($rows_count);
 
 
// $stmt->close();

// if($user_email == "" || $user_password == ""){
//     return "Both fields are required";
//  }

// $stmt = $mysqli->prepare("SELECT * FROM Reg_db WHERE Email_id = ?");
// $stmt->bind_param("s", $user_email);
// $stmt->execute();

// $result = $stmt->get_result();
// $data = $result->fetch_assoc();
// if($data != NULL){
//    return "Email already exists, please use a different username";
// }


//  $result=mysqli_query($con,$select_query);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//  $rows_count=mysqli_num_rows($result);
     
   // $count = mysqli_num_rows($result);  
  //  $row_data=mysqli_fetch_assoc($result);  
   

// if($rows_count>0){
  

//    // $_SESSION['email']=$user_email;
//   //  if(password_verify($user_password,$row_data['pwd'])){
        
//         if($rows_count==1)
//         {
//           //  $_SESSION['email']=$user_email;
//         echo "<script>alert('Login Sucessfully')</script>";
//         echo "<script>window.open('index.html','_self')</script>";
//         }else
//         {
//         //    $_SESSION['email']=$user_email;
//         echo "<script>alert('Login Sucessfully')</script>";
//         echo "<script>window.open('index.html','_self')</script>";
//         }
// }else{
//     echo "<script>alert('Invalid Credentials')</script>";
//     }
// }
// 

if($rows_count == 1){  
    echo "<h1><center> Login successful </center></h1>";  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}   


// if ($rows_count==1){
//     $row=mysqli_fetch_array($result);
//     $id=$row['id'];
// }   session_start();
//     $_SESSION['email']=$id;
//     echo "<script>alert('Login Sucessfully')</script>";
//      echo "<script>window.open('index.html','_self')</script>";
// }else{
//     echo "<script>alert('Invalid Credentials')</script>";
}
?>