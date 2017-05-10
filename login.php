<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login: electronic smart code</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600" rel="stylesheet">
   <!-- icon-tab -->
   <link rel="shortcut icon" href="img/ok.ico" type="image/x-icon" />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12" style="margin-top:15px; font-family: 'Source Sans Pro', sans-serif;">
                 <img src="img/ok.png" alt="esco-electronic smart code" height="150" width="150" >
                <h3 style="color: #0082c9;">( electronic smart code )</h3>
                <br>
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>
                            </div>
                            <div class="panel-body">

                                <form class="form-signin" action="#" method="post">
                                  <?php include 'login1.php' ?>
                                       <br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input name="username" type="text" class="form-control" placeholder="Your Username " required />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input name="password" type="password" class="form-control"  placeholder="Your Password" required/>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a>
                                            </span>
                                        </div>

                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login Now</button>
                                    <hr />
                                    <!-- Not register ? <a href="registeration.html" >click here </a> -->
                                    </form>
                            </div>

                        </div>
                    </div>


        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
