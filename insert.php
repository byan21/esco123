<?php
session_start();
if(empty($_SESSION['username'])){
  header('Location: index.php');
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>electronic smart code</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/ok.ico" type="image/x-icon" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="coba.php">ESCO</a>
            </div>
  <!-- <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div> -->
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/ok.png" class="user-image img-responsive"/>
					</li>


                      <li  >
                        <a  href="coba.php"><i class="fa fa-table fa-3x"></i> Table Data</a>
                    </li>
                    <li  >
                        <a class="active-menu"   href="insert.php"><i class="fa fa-edit fa-3x"></i> Insert Data</a>
                    </li>
					          <li  >
                        <a   href="update.php"><i class="fa fa-bolt fa-3x"></i> Update Data</a>
                    </li>
                    <li  >
                       <a   href="delete.php"><i class="glyphicon glyphicon-trash" style="font-size: 35px;"></i> Hapus Data</a>
                   </li>
                     <li  >
                        <a   href="registration.php"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                    </li>
                    <li  >
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="width:200px;" onclick="location.href='logout.php';"> <i class= "glyphicon glyphicon-log-out"  style="font-size: 35px;" ></i> Log out </button>
                   </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <img src="img/juno.jpg" alt="esco information" style="max-width: 95%">

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

                 <div class="row">
                     <div class="col-md-8 col-sm-5">
                         <div class="panel panel-primary">
                             <div class="panel-heading">
                                 Masukkan Data
                             </div>
                             <div class="panel-body">
                                <?php include 'insert1.php' ?>
                                <div style="margin-left:20px">
                                  <form class="form-group input-group" action="#" method="post">
                                    <div class="form-group ">
                                      <label>Kode Diagnosa</label>
                                      <input name="kode" class="form-control" placeholder="contoh Z00.xx" required/>
                                    </div>

                                    <div class="form-group ">
                                      <label>Nama Diagnosa</label>
                                      <input name="nama" class="form-control" placeholder="contoh Pemeriksaan xx xx" required />
                                    </div>
                                        <br>
                                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="insert"> Insert</button>
                                  </form>

                                </div>

                             <div class="panel-footer">
                                 ESCO Data Insert
                             </div>
                         </div>


                   </div>
        </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->

         <!-- Modal -->
       <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog modal-sm">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Keluar Program</h4>
             </div>
             <div class="modal-body">
               <p>Apakah Anda yakin ? </p>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-danger">Log out</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
             </div>
           </div>
         </div>
       </div>
     <!-- /. WRAPPER  -->
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
