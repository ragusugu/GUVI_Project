
<?php
// DATABASE CONNECTI
require '/opt/lampp/htdocs/Guvi Project/assets/vendor/autoload.php';
use Mongodb\Driver\ServerApi;

$con =new mysqli_connect('localhost','root','','GUVI_Database');
if(!$con){
   
    die(mysqli_error($con));
}
// else{{
//     echo "success";
// }}
//registraion process


    print_r($_POST);
    $user_Fname=$_POST['Fname'];
    $user_Lname=$_POST['Lname'];
    $user_email=$_POST['email'];
    $user_birthday=$_POST['dob'];
     $user_Gender=$_POST['gender'];
    $user_password=$_POST['pwd'];
    //$hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['cpwd'];
    //$user_address=$_POST['user_address'];
    $user_contact=$_POST['Number'];
    // $user_ip=getIPAddress();
    //-+echo "success";
//mongodb connect
    $serverApi = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Client(
        'mongodb+srv://root:root@cluster0.wvjftdb.mongodb.net/?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
    $db = $client->test;
//mysql connect
    $result= "select * from `Reg_db` where Email_id=?";
    $stmt = $mysqli->prepare($result);
    $stmt->bind_param('s',$user_email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    //if email already exist
if($count>0)
{
echo "<script>alert('Email id already associated with another account. Please try with diffrent EmailId.');</script>";
} 
// If email not exist
else {
$sql="insert into `Reg_db`(Email_id,password)VALUES(?,?)";
$stmti = $mysqli->prepare($sql);
$stmti->bind_param('ss',$user_email,$user_password);
echo" <script>alert('insert the value')</script>";
if($stmti->execute()){
    echo"<script>alert('Data inserted successfully')</script>";
};
$stmti->close();
//echo "<script>alert('User registration successful');</script>";
}

// $result=mysqli_query($con,$select_query);
// $row_count=mysqli_num_rows($result);

// if($user_password != $conf_user_password){
//     return "Passwords don't match";
//  }

// if($row_count>0){
//     echo "<script>alert('UserName and Email Already exits')</script>";
// }else if($user_password!=$conf_user_password){
//     echo "<script>alert('Password does not matches')</script>";
    
// }else{

    // insert query
    // echo "<script>alert('insert the values')</script>";
    // $insert_query="insert into `Reg_db`(Email_id,Password) values ('$user_email','$user_password')";
    
    // $sql_execute=mysqli_query($con,$insert_query);
    //     if($sql_execute){
    //         echo "<script>alert('Data insert Successfully')</script>";
    //         echo "<script>window.open('login.html','_self')</script>";
    //     }
    //     echo $e;


?>