<!doctype html>

<html>
        <head>
                <title>admin login</title>
                <link rel="stylesheet" type="text/css" href="css/style.css"/>
                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        </head>

        <body>
             <div class="container">
                 <div class= "login-box">
                     <div class="row">
                         <div class ="col-md-6 login-left">
                             <h2>Admin Login</h2>
                             <form action="home3.php" method="post">
                                 <div class="form-group">
                                     <label> Username </label>
                                     <input type="text" name="user" class="form-control" required>
                                 </div>
                                 <div class="form-group">
                                     <label> Password </label>
                                     <input type="password" name="password" class="form-control" required>
                                 </div>
                                 <button type="submit" class="btn btn-primary"> Login </button>
                             </form>



                          </div>
                     </div>
                </div>
             </div>
        </body>
</html>