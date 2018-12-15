	     <meta name="google-signin-client_id" content="843775755450-17lu665vnb3i2t1f2atu1ps9pl683j8o.apps.googleusercontent.com">

<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_destroy();?>
   <script src="https://apis.google.com/js/platform.js" async defer></script>
   <script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
 <?php  
header("location: PyrernaLP.php");?>
      

