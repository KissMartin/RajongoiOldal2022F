<?php
header("Access-Control-Allow-Origin: *");

if(isset($_POST["commentData"])){
    $data = json_decode($_POST["commentData"]);
    $name = htmlspecialchars(stripslashes(trim($data->name)));
    $comment = htmlspecialchars(stripslashes(trim($data->comment)));
    if($name == ""){
        $name = "Névtelen";
    }
    if($comment == ""){
        echo json_encode("empty");
        return;
    }

    $data;
    $newData = '{"name":"'.$name.'", "comment":"'.$comment.'"}'; //Az adatok sortírozva
    $oldFile = fopen("comments.txt", "r");
    $oldData = fread($oldFile, filesize("comments.txt"));
    $oldData = ltrim($oldData, '[');
    $oldData = ltrim($oldData, ']');
    fclose($oldFile);
    
    
    $data = $newData.', '.$oldData;
    if(substr($data, 1) != "["){
        $data = "[".$data;
    }
    if(substr($data, -1) != "]"){
        $data = $data . "]";
    }  
    
    //Megírom a fileba az adatokat
    $myfile = fopen("comments.txt", "w");
    fwrite($myfile, $data);
    
    fclose($myfile);

    echo json_encode("success");
}
?>