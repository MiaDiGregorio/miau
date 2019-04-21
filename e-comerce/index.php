
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
    <title>TechAndGo</title>
</head>
<body>
       
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffd2;">
            <a class="navbar-brand" href="#">TechAndGo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link" href="signin.php">Crea tu cuenta</a>
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
         
            <div >
         
            <!---CARRUSEL-->
            <div class="FotoCarousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="categorias.php"> <img class="d-block w-100 img-fluid" src="img/camera.jpg" alt="Responsive image First slide"> </a>
 
    </div>
    <div class="carousel-item">
    <a href="categorias.php"> <img class="d-block w-100 img-fluid" src="img/computer.jpg" alt="Responsive image First slide"> </a>
    </div>
    <div class="carousel-item">
    <a href="categorias.php"> <img class="d-block w-100 img-fluid" src="img/hightech.jpg" alt="Responsive image First slide"> </a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    </div>

    <!--FOTOS DE PRODUCTOS -->
   
    <div >
    <h2>Productos<small> <a href="">ver más</a></small></h2>
  <div class="row">
  
    <div class="col-6 col-md-6">
    <div class="card bg-dark text-white">
  <img class="card-img" src="..." alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>

    </div>
    <div class="col-6 col-md-6">
    <div class="card bg-dark text-white">
  <img class="card-img" src="..." alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>


    </div>
  </div>

  <div class="row ">
  <div class="card-deck">
    <div class="col-4 col-sm-4 col-md-3">
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">$76.000 <small>15% OFF</small></h5>
      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

    </div>
    <div class="col-4 col-sm-4 col-md-3">
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">$40.000 <small>8% OFF</small> </h5>
      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

    </div>
    <div class="d-none d-sm-block col-sm-4 col-md-3">
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> $25.000 <small>8% OFF</small></h5>
      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

    </div>
    <div class="d-none d-sm-none d-md-block col-md-3">
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">$5.000 <small>25% OFF</small></h5>
      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </div>
    
    </div>
  </div>

  <div class="row">
    <div class="col-6">

    </div>
    <div class="col-6">

    </div>
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