
<html>
<head>
    <title> add product </title>
         <link rel="stylesheet" type="text/css" href="css/style.css"/>
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>

    <body>
             <div class="container">
                 <div class= "login-box">
                     <div class="row">
                         <div class ="col-md-8 login-left">
                             <h2>Add Product</h2>
                             <form action="home3.php" method="post">
                                 <div class="container">
                                    <section class="panel panel-default">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                            <div class="form-group">
	                                            <div class="col-sm-9">
	                                            </div>
                                            </div> <!-- form-group // -->

                                          <div class="form-group">
                                          <label for="name" class="col-sm-3 control-label">Product name</label>
                                                <div class="col-sm-9">
                                                     <input type="text" class="form-control" name="name" id="name" placeholder="Enter the Product Name">
                                                </div>
                                            </div> <!-- form-group // -->
                                          <div class="form-group">
                                                <label for="about" class="col-sm-3 control-label">Description</label>
                                                <div class="col-sm-9">
                                                  <textarea class="form-control"></textarea>
                                                </div>
                                              </div> <!-- form-group // -->
                                              <div class="form-group">
                                                <label for="qty" class="col-sm-3 control-label">Price</label>
                                                <div class="col-sm-3">
                                               <input type="text" class="form-control" name="Price" id="Price" placeholder="Price">
                                                </div>
                                              </div> <!-- form-group // -->

                                              <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">Upload</label>
                                                <div class="col-sm-3">
                                                  <label class="control-label small" for="file_img">Image  (jpg/png):</label> <input type="file" name="file_img">
                                                </div>

                                              </div> <!-- form-group // -->
                                              <div class="form-group">
                                                <label for="tech" class="col-sm-3 control-label">Roast</label>
                                                <div class="col-sm-3">
                                               <select class="form-control">
                                            	<option value="">Select</option>
                                            	<option value="texnolog2">Dark Roast</option>
                                            	<option value="texnolog3">Medium Roast</option>
                                                 <option value="texnolog3">Light Roast</option>
                                               </select>
                                                </div>
                                              </div> <!-- form-group // -->
                                              <hr>
                                              <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                              </div> <!-- form-group // -->


                                            </div><!-- panel-body // -->
                                            </section><!-- panel// -->


                                            </div> <!-- container// -->
                             </form>



                          </div>
                     </div>
                </div>
             </div>
        </body>



</body>

</html>