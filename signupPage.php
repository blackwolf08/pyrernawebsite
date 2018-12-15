
   <!DOCTYPE html>
   <html>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <head>
         <title>Sign Up</title>
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/pyLP.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
         <link rel="shortcut icon" type="image/x-icon" href="assets/pylogo_Gpz_icon.ico" />


      </head>

      <body class="animated fadeIn">
         <?php
    session_start();

?>
         <div class="container-fluid">
            <div class="container text-center">
               <div class="col-sm-8 content-field first">
                  <div class="pythonlogo">
                     <img src="assets/pythonlogo.png">
                  </div>
                  <div class="pyrernaTxt">
                     <p class="animated bounceInUp">Pyrerna</p>
                  </div>
                  <form method="POST" action="signup.php">
                     <div class="form-group">
                        <input type="text" name="username" placeholder="Username" require>
                     </div>
                     <div class="form-group" id="password">
                        <input type="password" name="password" placeholder="Password" require>
                     </div>
                     <div class="form-group">
                        <input type="text" name="address" placeholder="Address" require>
                     </div>
                     <div class="form-group">
                        <input type="number" name="phonenumber" placeholder="Phone Number" require>
                     </div>
                     <div class="form-group">
                        <input type="email" name="email" placeholder="Email" require>
                     </div>
                     <button type="submit" class="btn btn-success"><i></i>Sign Up!</button>
                     
                  </form>
                  
               </div>

            </div>
            <div class="navbar footer">
               <a href="">About Us</a>
               <a href="">Pyrerna T&C</a>
               <a href="">Creators</a>
            </div>
         </div>
         <div class="se-pre-con"></div>


      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/global.js"></script>

      </body>
   </html>
