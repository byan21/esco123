<?php
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "data_b4s3";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if (isset($_POST['update'])) {
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   update($kode,$nama,$conn);

 }

function update($kode,$nama,$conn){
  $sql = "UPDATE diagnosa_tb SET name_diagnose ='$nama' WHERE kode_diagnos='$kode'";

  if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-success" role="alert">
   <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
   <span class="sr-only">Error:</span>
   Data berhasil diupdate  ke database
  </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
            Data gagal diupdate ke database
  </div>';
  }

}

 mysqli_close($conn);
 ?>
