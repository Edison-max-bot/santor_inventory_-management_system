<?php
include'../connection.php';

mysqli_query($con,"DELETE FROM Category WHERE cid='".$_POST['cid']."'");

?>