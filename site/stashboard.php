<?php

$path = isset($_GET['path']) ? $_GET['path'] : "";

filter_var($path, FILTER_SANITIZE_URL);

header("Location:http://preview.vl7kaitfbt9wjq307oeitrfi5293zousrcpeklnmi.box.codeanywhere.com/$path ");

?>
