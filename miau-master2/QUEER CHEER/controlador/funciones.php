<?php
session_start();

function validate($info){
    $errors=[];

    $name=trim($info["name"]);
  if(empty($name)){  
 $errors["name"]= "You can't leave this empty";
}
    $email=trim($info["email"]);
  if(empty($email)){  
     $errors["email"]="You can't leave this empty";
}
    $password = trim($info["password"]);
    $repassword = trim($info["repassword"]);
  if(empty($password)){  
        $errors["password"]="You can't leave this empty";
   } elseif (strlen($password) < 7) {
    $errores["password"]="Minimum a 7 letter word";
   } elseif ($password != $repassword) {
    $errores["repassword"]="Passwords don't match";
}
   if(empty($repassword)){  
    $errors["repassword"]="You can't leave this empty";
}
 return $errors;
 //FALTA AVATARRR BABY//
}

function dataLogging($info){
    $user=[
        $name =>$info["name"],
        $email =>$info["email"],
        $password => password_hash($info["password"], PASSWORD_DEFAULT),     
    ];
    return $user;
}

function saveData($user){
    $jsuser= json_encode($user);
    file_put_contents('user.json' , $jsuser , FILE_APPEND);
}

?>