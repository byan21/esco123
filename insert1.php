
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

 if (isset($_POST['insert'])) {
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   cek_kode($kode,$nama,$conn);

 }

function cek_kode($kode,$nama,$conn)
{
  $cekdata="select * from diagnosa_tb where kode_diagnos='$kode'";
  $ada=mysqli_query($conn,$cekdata);
if(mysqli_num_rows($ada)>0)
{
  echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
          Kode diagnosa telah terpakai
</div>';
}
else
{
   masuk($kode,$nama,$conn);
}
}

function masuk($kode,$nama,$conn){
  $sql = "INSERT INTO diagnosa_tb (kode_diagnos, name_diagnose)
  VALUES ('$kode', '$nama')";

  if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-success" role="alert">
   <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
   <span class="sr-only">Error:</span>
   Data berhasil masuk ke database
  </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
            Data gagal masuk ke database
  </div>';
  }

}

 mysqli_close($conn);
 ?>
