<?php
  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exti;
  }

  require_once "config.php";

  $username = '';
  $password = '';
  $username_err = '';
  $password_err = '';
  $login_err = '';

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
      $username_err = "Enter username";
    }else {
      $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
      $password_err = "Enter password";
    }else {
      $password = trim($_POST["password"]);
    }


    if(empty($username_err) && empty($password_err)){
      $sql = "SELECT id, username, password FROM users WHERE username = ?";

      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        $param_username = $username;

        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1){
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

            if(mysqli_stmt_fetch($stmt)){
              if(password_verify($password, $hashed_password)){

                session_start();

                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;

                header("location: ../index.php");
              }else{

                $login_err = "Invalid username or password";
              }
            }
          }else{
            $login_err = "Invalid username or password";
          }
        }else{
          echo "Please try later";
        }
        mysqli_stmt_close($stmt);
      }
    }
    mysqli_close($link);
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
     <link rel="stylesheet" href="../Styles/styles.css">
     <style>
       body{
         width: 50%;
         margin-left: auto;
         margin-right: auto;
         margin-top: 50px;
       }

       .form-group{
         padding: 10px;
       }
     </style>

   </head>
   <body>

     <div class="wrapper">
       <h2>Welcome back to settling your arguments</h2>
       <p>Please Sign in</p>

       <?php
          if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
          }
        ?>

       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

         <div class="form-group">
           <label>Username</label>
           <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
           <span class="invalid-feedback"><?php echo $username_err;?></span>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
          <span class="invalid-feedback"><?php echo $password_err;?></span>
       </div>


      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>

      <p>Don't have an account? <a href="register.php">Create account here</a></p>



       </form>
     </div>


   </body>
 </html>
