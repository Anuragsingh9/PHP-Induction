<?php

    include "newdb.php";
$name= $_GET['imgid'];
$file=("image/$name");
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($file) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file); //showing the path to the server where the file is to be download
    exit;



    // $filetype=filetype($file);

    //    $filename=basename($file);

    //    header ("Content-Type: ".$filetype);

    //    header ("Content-Length: ".filesize($file));

    //    header ("Content-Disposition: attachment; filename=".$filename);

    //    readfile($file);

?>