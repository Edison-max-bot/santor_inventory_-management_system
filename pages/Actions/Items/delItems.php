<?php
include'../connection.php';

mysqli_query($con,"DELETE FROM items WHERE iid='".$_POST['cid']."'");

?>