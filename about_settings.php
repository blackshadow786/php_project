<?php
$query_set="SELECT * from settings";
$get_dat=mysqli_query($dbconnect,$query_set);
$data=mysqli_fetch_assoc($get_dat);
 ?>
