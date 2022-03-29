<?php
header("Access-Control-Allow-Origin: *");
if(isset($_POST["commentData"])){
    //Beolvasom az adatokat
    $file = fopen("comments.txt", "r");
    $contents = fread($file, filesize("comments.txt"));
    print json_encode($contents);
}
?>