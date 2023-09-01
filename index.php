<?php
    $file = fopen("ujicoba.txt", "x");

    if ($file) {
       echo "File berhasil dibuat";
   } else {
       echo "File gagal dibuat";
    }
   $fclose($file);

?>
