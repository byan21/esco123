<?php
$connect = mysqli_connect("localhost", "root", "", "data_b4s3");
$outd;
if(isset($_POST["query"]))
{
     $output = '';
     $query = "SELECT * FROM diagnosa_tb WHERE kode_diagnos LIKE '%".$_POST["query"]."%'";
     $result = mysqli_query($connect, $query);
     $output = '<ul >';
     if(mysqli_num_rows($result) > 0)
     {
          while($row = mysqli_fetch_array($result))
          {
               $output .= '<li>'.$row["kode_diagnos"].'</li>';

          }
     }
     else
     {
          $output .= '<li>Data tida ketemu</li>';
     }
     $output .= '</ul>';
     echo $output;
}
?>
