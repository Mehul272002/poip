
<?php 
require_once("config.php"); 
if(isset($_POST['sublogin'])){ 
$login = $_POST['login_var'];
$password = $_POST['password'];
$userType= $_POST['userType'];
$query = "select * from users where ( userName='$login' AND userType='$userType')";
$res = mysqli_query($dbc,$query);
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
           $_SESSION["login_sess"]="1"; 
             $_SESSION["login_email"]= $row['email'];
            if($userType=="Student"){
                header("location:studentDashboard.php");
            }
            else if($userType=="Faculty"){
                header("location:facultyDashboard.php");
            }
            else if($userType=="Admin"){
                header("location:adminDashboard.php");
            }
            else{ 
                header("location:login.php?loginerror=".$login);
            }
            
        }
     }
     else{
        header("location:login.php?loginerror=".$login);
    }

    }
?>