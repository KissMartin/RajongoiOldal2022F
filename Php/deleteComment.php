<?php
header("Access-Control-Allow-Origin: *");

if(isset($_POST["commentData"])){
    $myfile = fopen("comments.txt", "w");
    fwrite($myfile, "");
    
    fclose($myfile);

    echo json_encode("success");
}
?>