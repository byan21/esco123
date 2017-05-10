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

     <link href="assets/Raleway?family=Raleway" rel="stylesheet">
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
                <a class="navbar-brand" href="coba.php" style="font-family: 'Raleway', sans-serif;">ESCO</a>
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
                        <a  href="insert.php"><i class="fa fa-edit fa-3x"></i> Insert Data </a>
                    </li>
					          <li  >
                        <a   href="update.php"><i class="fa fa-bolt fa-3x"></i> Update Data</a>
                    </li>
                    <li  >
                       <a  class="active-menu" href="delete.php"><i class="glyphicon glyphicon-trash" style="font-size: 35px;"></i> Hapus Data</a>
                   </li>
                     <li  >
                        <a   href="registration.php"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                    </li>
                    <li  >
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="width:200px;" onclick="location.href='logout.php';" > <i class= "glyphicon glyphicon-log-out"  style="font-size: 35px;" ></i> Log out </button>
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
                 <div class="container">
                   <div class="row">
                       <div class="col-md-12 col-sm-12">
                           <div class="panel panel-primary">
                               <div class="panel-heading">
                                   Hapus Data Diagnosa
                               </div>
                               <div class="panel-body">
                                   <form method="POST" class="form-inline">
                                     <div class="form-group">
                                       <label for="diagnosa">Pilih diagnosa :</label>
                                       <select name="diagnosa">
                                           <opt>--Pilih Data Diagnosa--</option>
                                           <?php
                                           $db=mysqli_connect("localhost", "root", "","data_b4s3");
                                           $sql = mysqli_query($db,"SELECT * FROM diagnosa_tb");
                                               while($data = mysqli_fetch_assoc($sql)){
                                                   echo '<option>'.$data['kode_diagnos']." ".$data['name_diagnose'].'</option>';
                                                   $id_diagnos=$data['id'];
                                               }
                                           ?>
                                       </select>
                                     </div>

                                   <input type="submit" name="submit" value="OK" />
                                   </form>
                                   <?php
                                   if (isset($_POST['submit'])) {
                                     $sql="DELETE FROM diagnosa_tb WHERE id = '$id_diagnos'";
                                     if (mysqli_query($db, $sql)) {
                                       echo '<div class="alert alert-success" role="alert">
                                      <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                                      <span class="sr-only">Error:</span>
                                      Data berhasil dihapus dari database
                                     </div>';
                                     } else {
                                       echo '<div class="alert alert-danger" role="alert">
                                             <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                             <span class="sr-only">Error:</span>
                                               Data gagal dihapus dari database
                                     </div>';
                                     }} ?>
                                  </div>

                               <div class="panel-footer">
                                   ESCO Data Delete
                               </div>
                           </div>

                         </div>
                       </div>
                 </div>


            </div>
        </div>
    </div>
             <!-- /. PAGE INNER  -->
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
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
