<!DOCTYPE html>
<html>
<head>
    <title>POIP</title>


<link rel="icon" href="logo2.png" type="image/icon type"
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">


		<style>

		body{
			background-position: center center;
  			background-attachment: fixed;
			margin: 0;
			height: 100vh;
			display: flex;
			background-image: url("bgf.jpg");
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			font-family: 'Poppins', sans-serif;
			font-size: 16px;
			justify-content: center;
			align-items: center;
		}

		.nav-list{
            align-items: center ;
            
			color: rgb(252, 252, 252);
 			 text-shadow: 2px 2px 4px #64abec;
			list-style-type: none;
			text-decoration: none;
			display: flex;
			flex-direction: column;
			list-style: none;
			/*align-items: center;*/
			padding: 15px 30px;
		
		}

		.nav-links{
            
			display: flex;
			align-items: center;
			position: relative;
			text-decoration: none;
			color: rgb(245, 250, 249);
			font-size: 20px;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			letter-spacing: 3px;
			padding: 15px 30px;
			margin: 0 18px;
			transition: color 0.3s ease-in-out;
		}

		.nav-links::before{
            
			background-position: 100%;
	
			z-index: -1;  /* so that it can't hide the nav-links text */
			content: "";
			position: absolute;
			top: 0;
			bottom: 0;
			left:0;
			width: 0;
			background-image: linear-gradient(to right,#55d3cf,#d3e2e2);
			transition: width 0.3s ease-in-out;
		}

		.nav-links:hover::before{
            
			width: 100%;
		
		}

		.nav-links:hover{
            
			color: black;
		
			transform: tra

			
	
		}
	</style>
</head>
<body>

<nav>   
	<ul class="nav-list">
	<h1 class="mb-5">  POIP </h1>
    	<li><a style="text-decoration:none" href="#" class="nav-links">HOME</a></li>
    	<li><a style="text-decoration:none" href="login.php" class="nav-links">LOGIN</a></li>
		<li><a style="text-decoration:none" href="#" class="nav-links">ABOUT</a></li>
		<li><a style="text-decoration:none" href="#" class="nav-links">CONTACT</a></li>
		
    
	</ul>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>
</html>