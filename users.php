<?php
$con = mysqli_connect("localhost","root","");
// Make sure we connected successfully

if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysqli_select_db($con,"db1");

   ob_start();
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/pyWCP.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/pylogo_Gpz_icon.ico" />

	<title>Users</title>
</head>
<body class="animated fadeIn">
		<div id="fb-root"></div>
<script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
                    console.log("logged in");

          
          
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          console.log("The person is logged into Facebook, but not your app.");
        } else {
                    console.log("log in he nhi h");

        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
        FB.init({
          appId: '2221094131503885',
          cookie: true, // enable cookies to allow the server to access 
          // the session
          xfbml: true, // parse social plugins on this page
          version: 'v3.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call 
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });

      };

      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Here we run a very simple test of the Graph API after login is
      // successful.  See statusChangeCallback() for when this call is made.
     
      function facebookLogout(){
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                FB.logout(function(response) {
                    window.location.href = "logout.php";
                    
                    });
                }
        	});
    }
      </script>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<img src="assets/pythonlogo.png" width="30" height="30" alt="">
		<a class="navbar-brand" href="welcome.php"><div class="animated fadeIn">Pyrerna</div></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" style="">
			
			
				<ul class="navbar-nav" id="navbarmeri">
					<li>
						Welcome <?php echo $_SESSION['username']?>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="welcome.php"><i class="fas fa-home"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="myPage.php"><i class="fas fa-user-alt"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tags.php"><i class="fas fa-tags"></i></a>
					</li><li class="nav-item">
						<a class="nav-link" href="users.php"><i class="fas fa-users"></i></a>
					</li>
					
					<li class="nav-item" style="">
						<button class="btn btn-danger" onclick="facebookLogout()">Signout</button>
					</li>
				</ul>
		
		</div>
		
	</nav>
	<div class="container-fluid">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4 pytxt animated fadeIn">Pyrerna</h1>
			</div>
		</div>
		
	    <div class="row">
			<div class="col-sm-2 leftpart">
				<div>
					<ul class="pad0">
						<li ><i class="fas fa-home"></i><a style="color:black;" href="welcome.php">Home</a></li>
						<li ><i class="fas fa-globe"></i><a  style="color:black;" href="myPage.php">My Profile</a></li>
						<li id="lpa3"><i class="fab fa-python"></i>Pyrerna</li>
						<ul>
							<li><i class="fas fa-tag"></i><a style="color:black;" href="tags.php">Tags</a></li>
							<li class="selected"><i class="fas fa-user"></i><a style="color:black;" href="users.php">Users</a></li>
							<li ><i class="fas fa-question"></i><a style="color:black;" href="welcome.php">Questions</a></li>
						</ul>
					</ul>
				</div>
			</div>
			<div class="col-sm-8">
				<?php
							
							$sql='SELECT username,email FROM admin';
								
								if ($result=mysqli_query($con,$sql))
								  {
								  
								  while ($row=mysqli_fetch_row($result))
								    {
								    $username1= $row[0];
								    $email = $row[1];
							
							
							
							?>
			    <div class="row btn-light" style="margin-top:20px;border-bottom:1px solid #A9A9A9;">
			        <div class="col-sm-2">
			            <img style="width:100px;height:100px;margin-bottom:5%;"src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" style="width:100%;height:200px;border-radius: 55px;"></img>
			        </div>
			        <div class="col-sm-5" align="center">
        			    <h4 style=""><?php echo $username1;?> </h4>
			        </div>
			        <div class="col-sm-5" align="center">
        			    <h4 style=""><?php echo $email;?> </h4>
			        </div>
			    </div>
			    <?php }
								    
								  // Free result set
								  mysqli_free_result($result);
								}
								else
								    {echo 'lul';}
								
								
				?>
				<?php
							
							$sql='SELECT name FROM users';
								
								if ($result=mysqli_query($con,$sql))
								  {
								  
								  while ($row=mysqli_fetch_row($result))
								    {
								    $username1= $row[0];
								    
							
							
							
							?>
			    <div class="row" style="margin-top:20px;">
			        <div class="col-sm-2">
			            <img style="width:100px;height:100px;"src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" style="width:100%;height:200px;border-radius: 55px;"></img>
			        </div>
			        <div class="col-sm-5" align="center">
        			    <h4 style=""><?php echo $username1;?> </h4>
			        </div>
			        <div class="col-sm-5" align="center">
        			    <h4 style="">FaceBook Login </h4>
			        </div>
			    </div>
			    <?php }
								    
								  // Free result set
								  mysqli_free_result($result);
								}
								else
								    {echo 'lul';}
								
								
				?>
			</div>
		</div>
		
	</div>
    <div class="se-pre-con"></div>

	
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/global.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>
</body>
</html>

    
<?php } 
else {
    header("location: PyrernaLP.php");
}

?>