<?php
include "Handler.php";
foreach (glob("sensors/*.php") as $filename) {
    include $filename;
    print("Loading $filename \n");
}
?>
