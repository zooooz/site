 <script>
function myFunction() {
  alert("Information Updated");
}
function togglePW(){
  document.querySelector('.eye').classList.toggle('slash');
  var password = document.querySelector('[name=password]');
  if(password.getAttribute('type') === 'password'){
    password.setAttribute('type', 'text');
  } else {
    password.setAttribute('type', 'password');
  }
}
</script>
<html>
     <head>
         <title>User Login And Regestration</title>
             <link rel="stylesheet" type="text/css" href="css/style.css"/>
             <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     </head>

        <body>
             <div class="container">
                <div class= "login-box">
                    <div class="row">
                         <div class ="col-md-6 login-right">

                             <h2>Edit Profile</h2>
                             <form action="home.php" method="post">
                                 <div class="form-group">
                                     <label> Full Name </label>
                                     <input type="text"  name="full" class="form-control" required>
                                 </div>
                                 <div class="form-group">
                                     <label> Email </label>
                                     <input type="email" name="email" class="form-control" required>
                                </div>
                                 <div class="form-group">
                                     <label> Password </label>
                                     <input id="password-field" type="password" name="password" class="form-control"  required>
                                      <div class="eye slash" onclick="togglePW()"></div>
                                 </div>
                                 <input type="submit" name="edit" onclick="myFunction()" value="update" />

                             </form>
                         </div>

                     </div>
                 </div>
             </div>
        </body>
</html>