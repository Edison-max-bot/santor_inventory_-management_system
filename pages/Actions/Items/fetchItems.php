<?php
include '../connection.php';

$q = mysqli_query($con, "SELECT items.iid, items.barcode, items.itemdesc, items.nameitem, category.categorydesc, unit.unitdesc, items.qty FROM items INNER JOIN category ON items.cid = category.cid INNER JOIN unit ON items.uid = unit.uid WHERE items.iid = '" . $_POST['cid'] . "'");
$rows = mysqli_fetch_array($q);
echo json_encode($rows);
?>
