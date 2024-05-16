<?php
// Include necessary files
include '../connection.php';
include '../vendor/autoload.php';
include 'generateBarcode.php';

use Picqer\Barcode\BarcodeGeneratorPNG;

try {
    // Fetch category details
    $c = mysqli_query($con, "SELECT * FROM category WHERE categoryDesc='" . $_POST['selcat'] . "'");
    $rowsC = mysqli_fetch_array($c);

    // Fetch unit details
    $u = mysqli_query($con, "SELECT * FROM unit WHERE unitDesc='" . $_POST['selunit'] . "'");
    $rowsU = mysqli_fetch_array($u);

    if ($_POST['p_id'] == "") {
        // Insert operation
        mysqli_query($con, "INSERT INTO items(barcode, nameitem, itemDesc, cid, uid, qty, price) VALUES ('" . $_POST['barcode'] . "','" . $_POST['nameitem'] . "','" . $_POST['item'] . "','" . $rowsC[0] . "','" . $rowsU[0] . "','" . $_POST['qty'] . "','" . $_POST['price'] . "')");
        $last_id = mysqli_insert_id($con); // Get the ID of the inserted item

       // Generate barcode image
       $generator = new BarcodeGeneratorPNG();
       $data = $_POST['barcode'];
       $barcodeFileName = 'barcode_images_' . $last_id . '.png';
       $barcodeFilePath = 'barcode_images/' . $barcodeFileName; // Adjust the path as needed
       file_put_contents($barcodeFilePath, $generator->getBarcode($data, $generator::TYPE_CODE_128)); // Generate and save barcode image

       // Update the database with the barcode image path
       mysqli_query($con, "UPDATE items SET barcode_image = '$barcodeFilePath' WHERE iid = $last_id");

       echo "1"; // Success message
   } else {
       // Update operation
       mysqli_query($con, "UPDATE items SET barcode='" . $_POST['barcode'] . "', nameitem='" . $_POST['nameitem'] . "', itemDesc='" . $_POST['item'] . "', cid='" . $rowsC[0] . "', uid='" . $rowsU[0] . "', qty='" . $_POST['qty'] . "', price='" . $_POST['price'] . "' WHERE iid='" . $_POST['p_id'] . "'");
       echo "2"; // Success message
   }
} catch (Exception $e) {
   echo "Error: " . $e->getMessage(); // Print error message if an exception occurs
}
?>