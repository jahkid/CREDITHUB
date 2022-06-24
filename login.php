<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <title>Login</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-4 offset-md-4 form-div">
             <form action="login.php" method="post">
                 <h3 class="text-center">CreditHub</h3>
                 <!-- <div class="alert alert-danger">
                     <li>Username required</li>
                 </div> -->
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" class="form-control form-control-lg">
                  </div>
                  
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                  </div>
                   <p class="text-center">Not yet a member? <a href="sign-up.php">Sign up</a></p> 
             </form>   
           </div>
       </div>
   </div>
</body>
</html>