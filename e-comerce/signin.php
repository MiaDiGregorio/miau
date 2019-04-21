<?php
include_once("controlador/function.php");
if ($_POST){
  $errors=validate($_POST);
   if(count(!$errores)){
    $user = usersData($_POST);
    saveUser($registro);
    header("location:login.php");
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <title>SignIn</title>
</head>
<body class="bodysignin">
    
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffd2;">
            <a class="navbar-brand" href="#">TechAndGo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="categorias.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorías
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Computadoras y Laptops</a>
                    <a class="dropdown-item" href="#">TV</a>
                    <a class="dropdown-item" href="#">Celulares y Telefonos</a>
                    <a class="dropdown-item" href="#">Acsesorios</a>
                    <a class="dropdown-item" href="#">Consolas y Videojuegos</a>
                    <a class="dropdown-item" href="#">Computadoras</a>
                    <div class=" dropdown-divider"></div>
                    <a class="dataExtra dropdown-item">Tecnología de primera calidad</a>
                  </div>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Ingresá</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="signin.php">Crea tu cuenta <span class="sr-only">(current)</span></a>
                  </li>
                
                  <a class="nav-link" href="login.php">   <i class='fas fa-cart-plus' style='font-size:25px'></i></a>
      
     
                </li>
             
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Look for it!.." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">GO!</button>
              </form>
              <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                    <a class="nav-link" href="faq.php">Support</a>
                  </li>
                </ul>
            </div>
          </nav>
             
   

        <!--SIGNIN FORMULARIO-->
        <div >
            <div class="login">
            <?php
      if(isset($errors)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errors as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>
                    <form action="function.php" method="post" class="text-center border border-0 p-5 col-md-4  center_div__ ">   

                        <h2 class="h4 mb-4 text-white"> Registrate! </h2>

                        <!--name-->
                        <label for="h4 mb-4 text-white validationServer03"></label>
                     <input name="name" type="text" class="form-control is-invalid" id="defaultRegisterFormUser validationServer03" placeholder="Usuario" required>
                   <div class="invalid-feedback">
                   Porfavor completar nombre del Usuario.
                    </div>       
                    <!--email-->  
                    <label for="h4 mb-4 text-white validationServer03"></label>
                     <input name="email" type="email" class="form-control is-invalid" id="defaultRegisterFormUser validationServer03" placeholder="Email" required>
                   <div class="invalid-feedback">
                   Porfavor completar email.
                    </div>       
                    <!--phone-->
                    <label for="h4 mb-4 text-white validationServer03"></label>
                     <input name="telefono" type="text" class="form-control is-invalid" id="defaultRegisterFormUser validationServer03" placeholder="Teléfono (opcional)" >
                   <div class="invalid-feedback">
                    Porfavor completar teléfono valido.
                        </div>  
                    <!--password-->     
                    <label for="h4 mb-4 text-white validationServer03"></label>
                     <input name="password" type="password" class="form-control is-invalid" id="defaultRegisterFormUser validationServer03" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                   <div class="invalid-feedback">
                   Contraseña no cumple con los requisitos.
                    </div>  
                    <!--repassword-->     
                    <label for="h4 mb-4 text-white validationServer03"></label>
                     <input name="repassword" type="password" class="form-control is-invalid" id="defaultRegisterFormUser validationServer03" placeholder="Contraseña identica" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                   <div class="invalid-feedback">
                   Contraseña no es identica.
                    </div>                                     
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-white mb-4 ">
                          Contrasña con al lo menos 7 caracteres y un numero.
                        </small>

                        <button class="btn btn-info my-4 btn-block " type="submit">Registrate!</button>
                        <hr>
                
                
                        <p class="text-white">Haciendo click en 
                            <em>Registrate</em> estas de acuerdo con nuestros
                            <a href="" target="_blank" >Terminos y condiciones</a></p>
                
                    </form>
                  </div>



    </div>
    <!--PIE DE PAGINA-->
    <footer class="pie">
      <div class="row">
          <section class="pies col-sm-12 col-md-6 col-lg-6">
            <h4>Costumer Service</h4>
            <br>
            <p>0800-19354778-99010</p>
    
          </section>

          <section class="pies col-sm-12 col-md-6 col-lg-6">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram" style="font-size:36px"></i></a> 
            <a href="https://www.youtube.com/"><i class="fa fa-youtube-square" style="font-size:36px"></i></a>            
            <br>
            <h4>Address</h4>
            <p>Virrey del Skere 1980</p>
          </section> 

          <section class="col-sm-12 col-md-12 col-lg-12">
                  <hr>
                  <p>©TECHOTA 2019</p>
              </section> 
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>