<?php


    include("../../Resources/config.php");



    $link_doc = $PATHMANUALADMIN;

    header('Content-Description: File Transfer');
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($link_doc).'"');
    readfile($link_doc);
    




?>