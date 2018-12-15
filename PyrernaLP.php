
  
   <!DOCTYPE html>
   <html>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <head>
         <title>Login Page</title>
	     <meta name="google-signin-client_id" content="843775755450-17lu665vnb3i2t1f2atu1ps9pl683j8o.apps.googleusercontent.com">
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/pyLP.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
      	<link rel="shortcut icon" type="image/x-icon" href="assets/pylogo_Gpz_icon.ico" />


      </head>

      <body class="animated fadeIn">
         <div id="fb-root"></div>
   
        <script>
    function onSuccess(googleUser) {
      var profile = googleUser.getBasicProfile();
          var username = profile.getName();
          var url = "facebooklogin.php?username="+username;
          window.location.href = url;
          console.log("logged in");
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>
<script>
var username;
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          
          
          
          testAPI();
          
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          console.log("The person is logged into Facebook, but not your app.");
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
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
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me',{fields: 'first_name'}, function(response) {
          username = response.first_name;
          var url = "facebooklogin.php?username="+username;
          window.location.href = url;
          
            
        });
      }
      
      
      </script>
        
         <div class="se-pre-con"></div>
         <div class="container-fluid">
            <div class="container text-center">
               <div class="col-sm-8 content-field first">
                  <div class="pythonlogo">
                     <img src="assets/pythonlogo.png">
                  </div>
                  <div class="pyrernaTxt">
                     <p class="animated bounceInUp">Pyrerna</p>
                  </div>
                  <form method="POST" action="login.php">
                     <div class="form-group">
                        <input type="text" name="username" placeholder="Username">
                     </div>
                     <div class="form-group" id="password">
                        <input type="password" name="password" placeholder="Password">
                     </div>
                     <button type="submit" class="btn btn-success"><i></i>Log In</button>
                                         <div class="g-signin2 " style="margin:10px 0 10px 0;padding-left: 41%;" ></div>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
  </fb:login-button>
  <div class="fpswd">
                        <a href="">Forgot password?</a>
                     </div>
                  </form>


               </div>
               <div class="col-sm-8 content-field last">
                  <p>Don't have an account? <a href="signupPage.php">Sign Up</a></p>
               </div>

            </div>
            <div class="navbar footer">
               <a href="">About Us</a>
               <a href="">Pyrerna T&C</a>
               <a href="about.html">Creators</a>
            </div>
         </div>
      
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/global.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
   


      </body>
   </html>
