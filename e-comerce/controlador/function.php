<?php
    function validate($info){
    $errors=[];
    $name = trim($info["name"]);
    if (empty($name)) 
    {      $errors["name"]= "El campo Nombre debe estar";
        }
    $email = trim($info["email"]);
    if (empty($email)) {
        $errors["email"]= "El campo Nombre debe estar";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[$email]="El email es invalido";
   }
   $password= trim($datos["password"]);
   $repassword = trim($datos["repassword"]);
    
    if(empty($password)){
        $errores["password"]= "No se puede dejar este campo vacío";
    }elseif (strlen($password)<7) {
        $errores["password"]="La contraseña debe tener como mínimo 7 caracteres";
    }
        if ($password != $repassword) {
            $errores["repassword"]="Las contraseñas no coinciden";
        }
    return $errors;
            
    }
    function usersData($info){
        $user = [
            "name"=>$info["nombre"],
            "email"=>$info["email"],
            "password"=> password_hash($info["password"],PASSWORD_DEFAULT),
            "perfil"=>1
        ];
        return $user;
    }
    
    function saveData($user){
        $jsuser = json_encode($user);
        file_put_contents('users.json',$jsuser. PHP_EOL, FILE_APPEND);
    }
    
    var_dump($_POST);
    
?>