
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="homepage.css" />
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="bootstrap.min.css" rel="stylesheet">
        <style>
            .form-heading { color:#fff; font-size:23px;}
            .panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
            .login-form .form-control {
                background: #f7f7f7 none repeat scroll 0 0;
                border: 1px solid #d4d4d4;
                border-radius: 4px;
                font-size: 14px;
                height: 50px;
                line-height: 50px;
            }
            .main-div {
                background: #ffffff none repeat scroll 0 0;
                border-radius: 2px;
                margin: 10px auto 30px;
                max-width: 38%;
                padding: 50px 70px 70px 71px;
            }

            .login-form .form-group {
                margin-bottom:10px;
            }
            .login-form{ text-align:center;}
            .forgot a {
                color: #777777;
                font-size: 14px;
                text-decoration: underline;
            }
            .login-form  .btn.btn-primary {
                background: #f0ad4e none repeat scroll 0 0;
                border-color: #f0ad4e;
                color: #ffffff;
                font-size: 14px;
                width: 100%;
                height: 50px;
                line-height: 50px;
                padding: 0;
            }
            .forgot {
                text-align: left; margin-bottom:30px;
            }
            .botto-text {
                color: #ffffff;
                font-size: 14px;
                margin: auto;
            }
            .login-form .btn.btn-primary.reset {
                background: #ff9900 none repeat scroll 0 0;
            }
            .back { text-align: left; margin-top:10px;}
            .back a {color: #444444; font-size: 13px;text-decoration: none;}

        </style>
    </head>
    <body id="loginForm">
        <div class="jumbotron">
            <div class="container">
                <div class="login-form">
                    <div class="main-div">
                        <div class="panel">
                            <h2>Admin Login</h2>
                        </div>
                        <form action="adminprocess.php" method="post" enctype="multipart/form-data" id="Login">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>
                            <div class="forgot">
                                <a href="reset.html">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary"><a href="viewallorder.php">Login</button>
                        </form>
                    </div>
                </div>
            </div>    
        </div> 

        <script src = "jquery-3.3.1.min.js"></script>
        <script src = "popper.min.js"></script>
        <script src="bootstrap.min.js"> </script>
   
    </body> 
</html>   