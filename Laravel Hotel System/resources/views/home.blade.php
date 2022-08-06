<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Systema Hotelero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS only -->
<link href="{{asset('public/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <!-- Navbar content -->
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <!--img src="" alt="" width="30" height="24" class="d-inline-block align-text-top"-->
            Bienvenido a... Hotel
          </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse collapse-navbar" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="administrador/login" style="padding-left: 65vw;">Iniciar Sección</a>
            </li>
        </div>
      </div>
    </nav>
    <div class="contenido">
      <!--div class="acronimoMegaswav">
        <img src="" alt="PortfolioJuanKR" class="acronimoImgMegaswav">
      </div-->
      <div class="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/juegos/rpg.png" class="d-block w-100 imgenCarrusel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
          <div class="carousel-item">
            <img src="img/juegos/plataforma2D.png" class="d-block w-100 imgenCarrusel" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/juegos/halloween.png" class="d-block w-100 imgenCarrusel" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
          </div>
        </div>   
    </div> 
    <br><br><br><br>
    <div class="footer">
      <br>
      <p>Footer</p>
    </div>
      <!--Bootstrap Bundle with Popper-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="js/app.js"></script>
  </body>
</html>