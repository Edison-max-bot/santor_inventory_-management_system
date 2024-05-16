<?php
// Include the necessary files
require_once('src/Barcode/BCGFontFile.php');
require_once('src/Barcode/BCGColor.php');
require_once('src/Barcode/BCGDrawing.php');

// Retrieve the item ID or any unique identifier for the barcode
$itemId = $_GET['item_id']; // Adjust this according to your form's data

// Create a new barcode object
$barcode = new BCGcode39();
$barcode->setScale(2); // Resolution
$barcode->setThickness(30); // Bar thickness
$barcode->setForegroundColor(new BCGColor(0, 0, 0)); // Color of bars
$barcode->setBackgroundColor(new BCGColor(255, 255, 255)); // Color of spaces
$barcode->setFont(new BCGFontFile('src/Barcode/font/Arial.ttf'), 10); // Font (adjust path as needed)

// Set the barcode content (you can use the item ID here)
$barcode->parse($itemId);

// Generate the barcode image
ob_start();
$drawing = new BCGDrawing('', new BCGColor(255, 255, 255));
$drawing->setBarcode($barcode);
$drawing->draw();
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
ob_end_flush();
