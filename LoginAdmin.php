<!doctype html>
        <script>
                var attempt = 3; // Variable to count number of attempts.
                // Below function Executes on click of login button.
                function validate(){
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                if ( username == "admin" && password == "admin"){
                   alert ("Welcome back admin");
                   window.location = "home2.php"; // Redirecting to other page.
                   return false;
            }
                else{
                    attempt --;// Decrementing by one.
                    alert("Wrong name or password!! You have "+attempt+" attempt/s...");
                    // Disabling fields after 3 attempts.
                    if( attempt == 0){
                        document.getElementById("username").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                        }
                    }
            }
                </script>
<html>

        <head>

                <title>User Login And Regestration</title>
                <link rel="stylesheet" type="text/css" href="css/style.css"/>
                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


        </head>

        <body>
             <div class="container">
                 <div class= "login-box">
                 <div class="row">
                     <div class ="col-md-6 login-left">

                      <h2>Login for Admin</h2>
                        <form id="form_id" method="post" name="myform">
                             <div class="form-group">
                                 <label> Admin Name </label>
                        <input type="text" name="username" class="form-control" id="username"/>
                             </div>
                             <div class="form-group">
                                 <label> Admin Password </label>
                        <input type="password" name="password" class="form-control" id="password"/>
                             </div>


                        <input type="button" value="Login" id="submit"  class="btn btn-primary" onclick="validate()"/>

                         </form>
                         </div>

                 </div>
                 </div>
             </div>
        </body>
</html>