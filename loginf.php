
   <!DOCTYPE html>
   <html>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <head>
         <title>Login Page</title>
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/pyLP.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

      </head>

      <body>
         <div class="container-fluid">
            <div class="container text-center">
               <div class="col-sm-8 content-field first">
                  <div class="pythonlogo">
                     <img src="assets/pythonlogo.png">
                  </div>
                  <div class="pyrernaTxt">
                     <p>Pyrerna</p>
                  </div>
                  <form method="POST" action="login.php">
                     <div class="form-group">
                        <input type="text" name="username" placeholder="Username">
                     </div>
                     <div class="form-group" id="password">
                        <input type="password" name="password" placeholder="Password">
                     </div>
                     <button type="submit" class="btn btn-success"><i></i>Log In</button>

                     <p style="text-align: center; color: #da1414">Your Username/Password was invalid, please double check your Username/Password.</p>

                     <div class="lifb">
                        <i class="fab fa-facebook"></i> <a href="">Log In With Facebook</a>
                     </div>
                     <div class="fpswd">
                        <a href="">Forgot password?</a>
                     </div>
                  </form>
                  
               </div>
               <div class="col-sm-8 content-field last">
                  <p>Don't have an account? <a href="">Sign Up</a></p>
               </div>

            </div>
            <div class="navbar footer">
               <a href="">About Us</a>
               <a href="">Pyrerna T&C</a>
               <a href="">Creators</a>
            </div>
         </div>

      <script type="text/javascript" src="js/pyLP.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>
      </body>
   </html>
