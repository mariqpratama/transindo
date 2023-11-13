<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Login Form</title>

        <link rel="stylesheet" href="style.css">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />

    </head>
    <body>

<div class="header">

    <div class="inner-header flex"> 
    
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form login-form">
                    <form action="login-user.php" method="POST" autocomplete="">
                        <h2 class="text-center" style="color:black;"> User Login </h2>
                        <p class="text-center" style="color:black;"><b>Login with your email and password.</b></p>
                        
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="link forget-pass text-left"><a href="forgot-password.php"><b>Forgot password?</b></a></div>
                        <div class="form-group">
                            <input class="form-control button" type="submit" name="login" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
   
    
    </div>
    </div>
    
    
    


    <div class="content flex">
    <p>Waste Management system | 2023 |</p>
    </div>
    </body>
</html>