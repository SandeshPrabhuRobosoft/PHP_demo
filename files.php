<?php
$file = "example.txt";

// write/create file
$handle = fopen($file, 'w');
fwrite($handle, "First line");
fclose($handle);

// read file to certain no of characters/bits.
$handle = fopen($file, 'r');
echo $xay = fread($handle, 5); // No of bits/characters
fclose($handle);

// read entire file
$handle = fopen($file, 'r');
echo $content = fread($handle, filesize($file)); // read entire file
fclose($handle);

//deleting a file
unlink($file);
