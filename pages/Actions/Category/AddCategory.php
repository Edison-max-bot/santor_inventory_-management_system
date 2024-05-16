<?php
include'../connection.php';

if($_POST['p_id']==""){
	mysqli_query($con,"INSERT into category(categoryDesc) values ('".$_POST['cat']."')");
	echo "1";
}
else{
	mysqli_query($con,"UPDATE category set categoryDesc='".$_POST['cat']."' WHERE cid='".$_POST['p_id']."'");
	echo "2";
}
?>