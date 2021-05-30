<?php

 require_once("config.php");
 require_once("login.php");
 if(!isset($_SESSION['userType']))
 {
  header('Location: login.php');

 }
 else
 {
  header('Location: adminRegister.php');

 }
  
 
?>




<!doctype html>

<html lang="en">
  <head>
  <link rel="icon" href="logo2.png" type="image/icon type">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Register User</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
  </head>
  

   <style>
  
  
body {
    position: relative;
    overflow-x:hidden;
    background-image: url("backg.jpg");
    background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    
    font-family: 'Roboto', sans-serif;
}

a:hover{
  color:white;
  text-decoration:none;
}

body,
html { height: 100%;}





/*---------------------------------
sidebar
----------------------*/

#sidebar-wrapper {
    z-index: 1000;
    height: 100%;
	width:0px;
	left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #222e3c;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #222e3c;
}

#sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color:#989898;
	border-radius:10px;
}


.sidebar-brand {
    font-weight: 600;
    font-size: 1.15rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: #f8f9fa;
}
.sidebar-header{
	text-transform:capitalize;
    padding: 1.5rem 1.5rem .375rem!important;
    font-size: 14px;
    color: #ced4da;
}

.navbar-nav > li > a ,.submenu-box ul li a{
    color:gray!important;
    text-transform: capitalize;
    font-size: 14px;
	  padding:10px 10px 10px 20px!important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
    font-family: 'Roboto', sans-serif;
    letter-spacing: .2px;
}

.submenu-box ul li a{
 padding:4px 10px 4px 20px!important;
  color:#c1c1c1!important;
}



.navbar-nav > li > a.active{
     color: #e9ecef!important;
    background: linear-gradient(90deg,rgba(59,125,221,.1),rgba(59,125,221,.0875) 50%,transparent);
    border-left:4px solid #3b7ddd;
}

.navbar-nav .has-sub > a.collapsed::after {
    transition: 0.4s ease;
}

.navbar-nav .has-sub > a.collapsed::after {
    color:gray;
    font-size: 10px;
    content: "\f078";
}
.navbar-nav .has-sub > a.collapsed::after {
   color:gray;
}

.navbar-nav .has-sub > a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color:gray;
    display: block;
    content: "\f077";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
}



#wrapper.toggled {
    padding-left: 270px;
}



.toggled#sidebar-wrapper {
    width:270px!important;
    height: 100%;
     left: 0px;
    overflow-y:auto;
    overflow-x:hidden;
    transition: all 0.5s ease;
}

.navbar-nav li{
  display:block!important;
  margin:2px 0px;
}


.nav-item .nav-link{
    display:block;
    color:white!important;
	text-transform:capitalize;
    text-decoration: none;
    padding:6px 10px; 
    transition:0.4s ease;	
}

.navbar-nav > li > a i:before{
  margin:0px 5px 0px 0px;
  font-size:14px;
}


/*---------------------------------
sidebar
----------------------*/






/*---------------------------------
  main-content
----------------------*/

#page-content-wrapper {
    width: 100%;
	transition: all 0.5s ease;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

	transition: all 0.5s ease;
}

 .toggled#page-content-wrapper{
  margin-left:270px;
  transition: all 0.5s ease;
 }
 
 @media only screen and (min-width:992px){
 .toggled#page-content-wrapper{
    width:calc(100% - 270px); 
	}
 }

/*---------------------------------
  main-content
----------------------*/



/*---------------------------------
cross-bar animation
----------------------*/


.nav-icon1{
  z-index: 999;
  position:relative;
  display: block;
  width:23px;
  margin:0px 30px 0px 25px;
   cursor:pointer;
  height: 25px;
}


.nav-icon1 span{
  position:absolute;
  top:0;
  width:100%;
  height:3px;
  cursor:pointer;
  background-color:#5d5d5d;
  left:0;
  transform:rotate(0deg);
  transition:.30s ease-in-out;
}

.nav-icon1:hover span:nth-of-type(1){
  top:-3px
}

.nav-icon1:hover span:nth-of-type(3){
  top:19px;
}

.nav-icon1 span:nth-of-type(1){
   top:0;
}

.nav-icon1 span:nth-of-type(2){
   top:8px;
}

.nav-icon1 span:nth-of-type(3){
   top:16px;
}

.nav-icon1.open span:nth-of-type(1){
   top:8px;
   transform:rotate(135deg);
}

.nav-icon1.open span:nth-of-type(2){
   top:8px;
   opacity:0;
   left:-30px;
}

.nav-icon1.open span:nth-of-type(3){
   top:8px;
   transform:rotate(-135deg);
}


/*---------------------------------
cross-bar animation
----------------------*/



/*---------------------------------
header navbar design
----------------------*/
.my-navbar{
  padding:0px;
  background-color:white;
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.16);
}

.text-gray-600 {
    color: #858796!important;
}
.nav-link .img-profile {
    height:40px;
    width:40px;
}

.navbar-nav > li > a >i{
    font-size: 18px;
    color:#b3b3b3;
	margin:8px 0px 0px 0px;
	padding:0px;
}

.badge-counter {
    position: absolute;
    transform:scale(.7);
    transform-origin: top right;
    right:6px;
	margin-top:4px;
}


.dropdown, .dropleft, .dropright, .dropup {
    position: relative;
}

.nav-flag, .nav-icon {
    padding: .1rem .8rem;
    display: block;
    font-size: 1.5rem;
    color: #6c757d;
    transition: background .1s ease-in-out,color .1s ease-in-out;
    line-height: 1.4;
}


.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
}
.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}
.dropdown-menu-lg {
    min-width: 20rem;
}


.position-relative {
    position: relative!important;
}

.nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top .1s ease-out;
    font-size: .675rem;
    color: #fff;
}

/*---------------------------------
 header navbar design
----------------------*/



/*---------------------------------
main-top card
----------------------*/

.card {
    margin-bottom: 24px;
	border:none;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-title {
    font-size: .875rem;
    color: #495057;
}

.card-body h1{
font-size: 1.75rem;
font-weight: 400;
    line-height: 1.2;
    color: #000;
}


.text-gray-800 {
    color: #5a5c69!important;
	font-size: 1.75rem;
	font-weight: 400;
    line-height: 1.2;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
}


.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


.font-16 {
    font-size: 16px;
}



/*---------------------------------
main-top card
----------------------*/




/*---------------------------------
main-table
----------------------*/


 .m-r-10 {
    margin-right: 10px;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}
.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
	  margin-top: -0.375rem;
}


.table td, .table th {
    padding: 1rem;
	font-size:14px;
	color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5{
      font-size: 16px;
	  font-weight:600;
	  color:#585858;
}



/*---------------------------------
main-table
----------------------*/




/*---------------------------------
 footer
----------------------*/

footer.footer {
    padding: 1rem .875rem;
    direction: ltr;
    background: #fff;
}

footer.footer ul {
    margin:0px;
	list-style:none;
}

.footer ul  li{
 display:inline-block;
 margin:0px 7px;
}

.text-muted {
    color: #6c757d!important;
	font-size:14px;
}
 


/*---------------------------------
footer
----------------------*/

.errmsg{ 
  margin: 2px auto;
  border-radius: 5px;
  border: 1px solid red;
  background: pink;
  text-align: left;
  color: brown;
  padding: 1px;
}





</style>
  
  
  <body>
  
  
  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">POIP Dashboard</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	 
<li class="sidebar-header">
						Pages
					</li>
	<li class=""> 
		  <a class="nav-link text-left "  role="button" href="adminDashboard.php">
       <i class="flaticon-bar-chart-1"></i>  Dashboard 
         </a>
		  </li>
	 
       <li class="has-sub"> 
		  <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   Profile
         </a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box"> 
										<ul class="list-unstyled m-0">
											<li><a href="">PHP Frameworks</a></li>
											<li><a href="">Laravel</a></li>
										    <li><a href=""> Codeigniter</a></li>
										    <li><a href="">Node.js</a></li>
										    <li><a href="">AngularJS</a></li> 
											 <li><a href="">ReactJS</a></li> 
										    <!-- <li><a href="">Asp.net</a></li> -->
										</ul>
									</div>
								</div>
								
							</div>
						</div>
		     </div>
		  </div>
		  </li>
		  <li class=""> 
		  <a class="nav-link text-left active"  role="button" href="adminRegister.php" >
       <i class="flaticon-bar-chart-1"></i>  Register User
         </a>
		  </li>
		 
		 <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i> invoice 
         </a>
		  </li>
		<li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  Bank 
         </a>
		  </li>
		   <li class="sidebar-header">
						tools and component
					</li>
		      
			   <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  ui element 
         </a>
		  </li>
		  
		    <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  form 
         </a>
		  </li>
		    <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  table 
         </a>
		  </li>
		  
		    <li class="sidebar-header">
						tools and component
					</li>
		     <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-bar-chart-1"></i>  chart 
         </a>
		  </li>
		  <li class=""> 
		  <a class="nav-link text-left"  role="button" >
       <i class="flaticon-map"></i>   map
         </a>
		  </li>
		  
		  </ul>

				
			</div>
	   
	   
    </nav>
        <!-- /#sidebar-wrapper -->










        <!-- Page Content -->
        <div id="page-content-wrapper">
         
			
			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>
			

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
					placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
            <!-- Nav Item - Messages -->
            <li class="nav-item">
              <a class="nav-link " href="#"
			 role="button">
                <i class="fas fa-envelope"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Keep growing</span>
                <img class="img-profile rounded-circle" src="logo2.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


        





        

        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
<div class="row">
<div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 
			Generate Report</a>
          </div>
		  </div>

      

      <!--Register user section-->

      <div class="col-md-12">
        <div class="row">

        
		<div class="col-sm-3">
        <?php 
                    if(isset($_POST['signup'])){
                    extract($_POST);
                    if(strlen($firstName)<3){ // Minimum 
                        $error[] = 'Please enter First Name using 3 charaters atleast.';
                            }
                    if(strlen($firstName)>20){  // Max 
                        $error[] = 'First Name: Max length 20 Characters Not allowed';
                            }
                    if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $firstName)){
                                $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                            }    
                    if(strlen($lastName)<3){ // Minimum 
                        $error[] = 'Please enter Last Name using 3 charaters atleast.';
                            }
                    if(strlen($lastName)>20){  // Max 
                        $error[] = 'Last Name: Max length 20 Characters Not allowed';
                            }
                    if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lastName)){
                                $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                                }    
                        if(strlen($userName)<3){ // Change Minimum Lenghth   
                                $error[] = 'Please enter userName using 3 charaters atleast.';
                            }
                    if(strlen($userName)>50){ // Change Max Length 
                                $error[] = 'userName : Max length 50 Characters Not allowed';
                            }
                   
                    if(strlen($email)>50){  // Max 
                                $error[] = 'Email: Max length 50 Characters Not allowed';
                            }

                            if(strlen($password)<5){ // min 
                                $error[] = 'The password is 6 characters long.';
                            }
                            
                            if(strlen($password)>20){ // Max 
                                $error[] = 'Password: Max length 20 Characters Not allowed';
                            }
                            $sql="select * from users where (userName='$userName' or email='$email');";
                        $res=mysqli_query($dbc,$sql);
                    if (mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);

                        if($userName==$row['userName'])
                        {
                            $error[] ='userName alredy Exists.';
                            } 
                        if($email==$row['email'])
                        {
                                $error[] ='Email alredy Exists.';
                            } 
                        }
                            if(!isset($error)){ 
                                $date=date('Y-m-d');
                                $options = array("cost"=>4);
                        $password = password_hash($password,PASSWORD_BCRYPT,$options);
                                
                            $result = mysqli_query($dbc,"INSERT into users values('','$userName','$firstName','$lastName','$email','$password','$userType','')");

                            if($result)
                        {
                        $done=2; 
                        }
                        else{
                        $error[] ='Failed : Something went wrong';
                        }
                    }
 }
?>

     
            <?php 
                if(isset($error)){ 
                foreach($error as $error){ 
                echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
                }
                }
            ?>
        </div>

          <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
            
             
                <div class="d-flex justify-content-center align-items-center login-container signup_form">
                <form class="login-form text-center" action="" method="POST">
                <h1 class="mb-5 font-weight-light text-uppercase">Register User</h1>
                                       	
                                     
                                        <div class="form-group">
                                         <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php if(isset($error)){ echo $_POST['firstName'];}?>" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php if(isset($error)){ echo $_POST['lastName'];}?>" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="userName" placeholder="Username" value="<?php if(isset($error)){ echo $_POST['userName'];}?>" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email-Address" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="userType" placeholder="Select User-type" list="users" aria-label="Text input with dropdown button" value="<?php if(isset($error)){ echo $_POST['userType'];}?>" required="">
                                                <datalist id="users">
                                                        <option>Admin</option>
                                                        <option>Faculty</option>
                                                        <option>Student</option>
                                                </datalist>
                                        </div> 
                                        <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button>
                </form>
            </div>
         <!--/Register user end -->
              </div>
            <!--Announments Section-->
          </div>
          </div>

          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Annoumments</h5>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <h1 class="display-5 mt-1 mb-3">temp................</h1>
                <div class="mb-1">
                  <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                  <span class="text-muted">Since last week</span>
                </div>
              </div>
            </div>

            <!--/Annoumnets end-->


          
                   
        </div>
 
     
                    
        <!-- /.container-fluid -->

 </div>
			
			
			
			
        
			
			
			
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Dashboard Vishweb Design </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
  
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

   
   
 
  
  
  </body>
</html>