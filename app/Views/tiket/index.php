<?php
$permitted_chars = '0123456789';
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
$numbarcode = substr(str_shuffle($permitted_chars), 0, 5);
echo $generator->getBarcode($numbarcode, $generator::TYPE_CODE_128);
echo sprintf("%08d", $numbarcode);
