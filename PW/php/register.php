<?php
  require_once "config.php";

  $username = '';
  $password = '';
  $confirm_password = '';

  $username_err = '';
  $password_err = '';
  $confirm_password_err = '';


  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
      $username_err = "Enter a username";
    } elseif(!preg_match('/^[a-zA-z0-9_]+$/', trim($_POST["username"]))){
      $username_err = "Username must contain letters, numbers or underscores";
    } else{
      $sql = "SELECT id FROM users WHERE username = ?";

      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = trim($_POST["username"]);

        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1){
            $username_err = "Username is taken";
          }else{
            $username = trim($_POST["username"]);
          }
        } else{
          echo "Please try again later";
        }
        mysqli_stmt_close($stmt);
      }
    }

    //password
    if(empty(trim($_POST["password"]))){
      $password_err = "Enter password";
    }elseif(strlen(trim($_POST["password"])) < 6){
      $password_err = "Password must be at least 6 characters";
    }else{
      $password = trim($_POST["password"]);
    }

    if(empty(trim($_POST["confirm_password"]))){
      $confirm_password_err = "Please confirm password";
    }else{
      $confirm_password = trim($_POST["confirm_password"]);
      if(empty($password_err) && ($password != $confirm_password)){
        $confirm_password_err = "Password does not match";
      }
    }


    //check input errors before plugging in databse
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

      $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        if(mysqli_stmt_execute($stmt)){
          header("location: login.php");
        }else{
          echo "Something went wrong, please try again later";
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
     <title>Sign Up</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
       <h2>Welcome to settling your arguments</h2>
       <p>Please Sign Up</p>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

         <div class="form-group">
           <label>Username</label>
           <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
           <span class="invalid-feedback"><?php echo $username_err;?></span>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
          <span class="invalid-feedback"><?php echo $password_err;?></span>
       </div>

       <div class="form-group">
         <label>Confirm Password</label>
         <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
         <span class="invalid-feedback"><?php echo $confirm_password_err;?></span>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-secondary ml-2" value="Reset">
      </div>

      <p>Already have an account? <a href="login.php">Login Here</a></p>



       </form>
     </div>

   </body>
 </html>
