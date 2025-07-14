<?php
header('Content-Type: text/plain');

$filename = 'DropRatesMessage.txt';

if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo "Custom message not found.";
}
?>
