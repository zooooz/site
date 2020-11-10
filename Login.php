<!doctype html>

<html>
        <head>
                <title>User Login And Regestration</title>
                <link rel="stylesheet" type="text/css" href="css/style.css"/>
                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
                <a class="nav-link" href="#">Link</a>
        </head>

        <body>
             <div class="container">
                 <div class= "login-box">
                 <div class="row">
                     <div class ="col-md-6 login-left">

                      <h2>Login Here</h2>
                         <form action="home2.php" method="post">
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
                         <br/>
                         <form action="Login2.php" method="post">
                             <button type="submit" class="btn btn-primary"> Admin here </button>
                         </form>
                         </div>
                 <div class ="col-md-6 login-right">
                         <h2>Regester Here</h2>
                         <form action="home2.php" method="post">
                             <div class="form-group">
                                 <label> Username </label>
                                 <input type="text" name="user" class="form-control" required>
                             </div>
                             <div class="form-group">
                                 <label> Full Name </label>
                                 <input type="text" name="full" class="form-control" required>
                             </div>
                             <div class="form-group">
                                 <label> Email </label>
                                 <input type="email" name="email" class="form-control" required>
                             </div>
                             <div class="form-group">
                                 <label> Password </label>
                                 <input type="password" name="password" class="form-control" required>
                             </div>
                             <button type="submit" class="btn btn-primary"> Register </button>
                         </form>
                     </div>
                 </div>
                 </div>
             </div>
        </body>
</html>