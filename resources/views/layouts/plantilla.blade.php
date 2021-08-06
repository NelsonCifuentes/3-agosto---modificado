<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<!--Navbar-->
<nav class=" navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active font-weight-bold" aria-current="page" href="inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  font-weight-bold" href="costelaciones">CONSTELACIONES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="galaxias">GALAXIAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="universo">UNIVERSO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--End Navbar-->
<div class="container">
    <div class="row">
    <!--SideBar-->
        <div  class="col-md-3" style="background-color:black">
        <br><br>
        <ul class="list-group font-weight-bold text-center" >
            <li class="list-group-item p-3 mb-2 bg-info text-white" aria-current="true">0</li>
            <li class="list-group-item p-3 mb-2 bg-info text-white">1</li>
            <li class="list-group-item p-3 mb-2 bg-info text-white">2</li>
            <li class="list-group-item p-3 mb-2 bg-info text-white">3</li>
            <li class="list-group-item p-3 mb-2 bg-info text-white">4</li>
        <br><br>
        </ul>
    </div>
    <!--End SideBar-->
    <!--Contenido-->
        <div class="col-md-9"style="background-color:black"  >
           @yield("contenido")
        </div>
    <!--End Contenido-->
    </div>
</div>

<footer >
<div  class="p-3 mb-2 bg-secondary text-white text-center font-weight-bold">EL UNIVERSO.COM</div>

</footer>
</body>
</html>