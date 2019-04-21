<?php
function validate($info){


}
function dataLogging($info){
    $data=[
        $name=>$_POST["name"];
        $email=>$_POST["email"];
        $password=>$_POST["password"];
        
    ];
    return $data;
function saveData($info){
    $jsdata= json_encode($info);
    file_put_contents($jsondata.json"login.php", file_append)

}


}
?>