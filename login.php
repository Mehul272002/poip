<?php require_once("config.php"); ?>

<?php
    $msg=""; 

    if(isset($_POST['login'])){
        $userName=$_POST['userName'];
        $password=$_POST['password'];
       // $options = array("cost"=>4);
      //$password=password_hash($password,PASSWORD_B,$options);
        $userType=$_POST['userType'];

        $sql= "SELECT * FROM users WHERE userName=? AND password=? AND userType=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sss",$userName,$password,$userType);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['userName']=$row['userName'];
        $_SESSION['userType']=$row['userType'];
        session_write_close();

        if($result->num_rows==1 && $_SESSION['userType']=="Student"){
            header("location:studentDashboard.php");//temp code for directing student login to sucess dashboard page 
        }
        else if($result->num_rows==1 && $_SESSION['userType']=="Faculty"){
            header("location:facultyDashboard.php");//temp code for directing faculty login to sucess dashboard page 
        }
        else if($result->num_rows==1 && $_SESSION['userType']=="Admin"){
            header("location:adminDashboard.php");//temp code for directing admin login to sucess dashboard page 
        }
        else{
            $msg="User or Password is Incorrect!";
        }
    }

?>

<!doctype html>
<html lang="en">



<head>
<link rel="icon" href="logo2.png" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous" />
    <title>Login_POIP</title>
    <style>
      body{
  background-image: url("bg2.jpg");
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  
}
.login-container{
  height: 100vh;
  width: 100%;
}
.login-form{
  margin: auto;
  width: 370px;
  padding: 15px;
  max-width: 100%;
}
.login-form .form-control{
  font-size: 15px;
  min-height: 48px;
  font-weight: 500;
}
.login-form a{
  text-decoration: none;
  color:rgb(53, 128, 138);
}
.login-form a:hover{
  color:#ffffff;
}
.forgot-link{
  font-size: 13px;
}

.form-control:focus{
  border-color:#fdfdfd;
  box-shadow: 0 0 0 0.2rem rgba(114,61,190,.25);
}
.btn-custom{
  background: #296e70;
  border-color:#296e70;
  color:#fff;
  font-size: 15px;
  font-weight: 600;
  min-height: 48px;
}
.btn-custom:focus,
.btn-custom:hover,
.btn-custom:active,
.btn-custom:active:focus{
  background: #65cdd1;
  border-color: #65cdd1;
  color:#fff;
}
.btn-custom:focus{
  box-shadow: 0 0 0 0.2rem rgba(114,61,190,.25);
}
div {
    padding: 20px 0px 5px; /* top | horizontal | bottom */
}


    </style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center login-container">
  <form action="login_process.php" method="POST">
    <center>
    <h1 class="mb-3 font-weight-light text-uppercase"><img src="logo2.png" height="100" width="100" alt=""></h1>
    </center>
            <div class="form-group">
        <?php 
        if(isset($_GET['loginerror'])) {
          $loginerror=$_GET['loginerror'];
        }
        if(!empty($loginerror)){  echo '<span style="color:#AFA;text-align:center;">Invalid login credentials entered, Please try again</span>'; } 
        ?>

    
    <input type="text" class="form-control rounded-pill form-control-lg" name="login_var" placeholder="Username" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
    </div>
    <div class="form-group">
    <input type="password" class="form-control rounded-pill form-control-lg" name="password" placeholder="Password" class="form-control" required="">
    </div>
    <div class="form-group" >
                <font color="white">
                <label for="userType">User type : </label>
                <input type="radio" name="userType" value="Student" class="custom-radio" required>&nbsp;Student |
                <input type="radio" name="userType" value="Faculty" class="custom-radio" required>&nbsp;Faculty |
                <input type="radio" name="userType" value="Admin" class="custom-radio" required>&nbsp;Admin 
                </font>
            </div>
            



 
  <button type="submit" name="sublogin" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block text-uppercase">Login</button>
</form>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>