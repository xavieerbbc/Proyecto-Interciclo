<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pizza Home</title>

  <link rel="stylesheet" type="text/css" href="res/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="res/lib/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="res/lib/fontawesome/css/all.min.css">
  <link type="text/css" href="res/cssMenu.css" rel="stylesheet">
  <script src="res/lib/jquery/jquery.min.js"></script>

</head>

<body>
  <section class="fondopizza">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <br>
          <h1 class="titulo"><img src="imagenes/iconos/pizzaHome.png" alt="imgfondopizza"> Pizza Home</h1>
        </div>
        <div class="col-md-7 col-xs-5">
          <br><br>
          <!---
<form class="form-horizontal" role="form">
<div class="input-group">
<input type="hidden" name="view" value="productos">
<input type="hidden" name="act" value="search">
      <input type="text" name="q" placeholder="Buscar productos ..." class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
      </span>
    </div>
</form>
-->
          <br><br>
        </div>
        <div class="col-md-2 col-xs-2">
          <!-- cart button -->
          <br><br>

        </div>

      </div>
    </div>
    </section>





    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!--  <a class="navbar-brand" href="./">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" class="menu1">
            <li class="nav-item active"><a class="nav-link" href="./"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="./"><i id="fa fa-home" id="menustyle"></i> Menu</a></li>
            <li><a href="index.php?view=client"><i id="menustyle"></i> Pedido</a></li>
            <li><a href=""><i id="menustyle"></i> Sucursales</a></li>

      <li><a href=""><i id="menustyle"></i> Acerca De.</a></li>

        <div class="collapse navbar-collapse m2" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" class="menu1">
            <li class="nav-item active"><a class="menustyle nav-link" href="./"> Inicio</a></li>
            <li><a class="menustyle nav-link"href="index.php?view=index2"> Menu</a></li>
            <li><a class="menustyle nav-link" href="index.php?view=client">Pedido</a></li>
            

            <?php
$cats = CategoryData::getPublics();
?>
            <?php if(count($cats)>0):?>

            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

                <i class="fa fa-th-list"></i> Combos

                <i class="fa fa-user"></i> Sucursales

              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(isset($_SESSION["client_id"])):?>
                <a class="dropdown-item" href="index.php?view=matriz">Matriz</a>
                <a class="dropdown-item" href="index.php?view=sucursal1">Sucursal 1</a>
                <a class="dropdown-item" href="index.php?view=sucursal2">Sucursal 2</a>
                <?php else:?>
                <a class="dropdown-item" href="index.php?view=matriz">Matriz</a>
                <a class="dropdown-item" href="index.php?view=sucursal1">Sucursal 1</a>
                <a class="dropdown-item" href="index.php?view=sucursal2">Sucursal 2</a>
                <?php endif; ?>
              </div>
            </li>


            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

                <i class="fa fa-user"></i> Mi cuenta
              </a>

                <i class="fa fa-th-list"></i> Combos
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown fondo">
                <?php foreach($cats as $cat):?>
                <a class="dropdown-item"
                  href="index.php?view=productos&cat=<?php echo $cat->short_name; ?>"><?php echo $cat->name; ?></a>
                <?php endforeach; ?>
              </div>
            </li>
            <?php endif; ?>



            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> Mi cuenta
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(isset($_SESSION["client_id"])):?>
                <a class="dropdown-item" href="index.php?view=client">Mi cuenta</a>
                <a class="dropdown-item" href="logout.php">Salir</a>
                <?php else:?>

                <a class="dropdown-item" href="admin/index.php?view=login">Administrador</a>

                <a class="dropdown-item" href="index.php?view=clientaccess">Iniciar sesion</a>
                <a class="dropdown-item" href="index.php?view=register">Registro</a>
                <?php endif; ?>
              </div>
            </li>
            
            <li><a class="menustyle nav-link" href="index.php?view=mision"> Acerca De.</a></li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <input type="hidden" name="view" value="productos">
            <input type="hidden" name="act" value="search">

            <input class="form-control mr-sm-2" name="q" type="search" placeholder="Buscar ..." aria-label="Buscar ...">

            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            &nbsp;

            <span class="input-group-btn">
        <button class="btn btn-primary" type="button">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
      </span>

            <a href="index.php?view=mycart" class="btn  btn-secondary my-2 my-sm-0"><i class="fa fa-shopping-cart"></i>
              <?php if(isset($_SESSION["cart"])):?>
              <span class="badge"><?php echo count($_SESSION["cart"]); ?></span>
              <?php endif; ?>
            </a>
          </form>
        </div>
      </div>
    </nav>



    <br>
    <?php View::load("index"); ?>
    <br><br><br>
    <br>
    <script src="res/lib/bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(".tip").tooltip();
    </script>
</body>
<footer>
  <div class="pieNombre">
    <h3>Pizza Home Cuenca</h3>
  </div>
  <div class="contenidoPie">

    <div class="infoPie">
      <img src="imagenes/iconos/pizzaHome.png" alt="imgPie">
      <div class="detalleInfoPie">
        <p class="tituloDetalleInfoPie">Matriz Cuenca</p>
        <p class="textoDetalleInfoPie">1700-007-007 o (2)3993200</p>
        <p class="tituloDetalleInfoPie">SUCURSAL 1</p>
        <p class="textoDetalleInfoPie">1700-007-008 o (2)3993201</p>
        <p class="tituloDetalleInfoPie">SUCURSAL 2</p>
        <p class="textoDetalleInfoPie">1700-007-009 o (2)3993202</p>
      </div>
    </div>
    <div class="infoPie">
      <img src="imagenes/iconos/cobertura.png" alt="imgPie">

      <div class="detalleInfoPie">
        <p class="tituloDetalleInfoPie">MATRIZ</p>
        <p class="textoDetalleInfoPie">Av. Gonzalez Suarez, Calle Gral. José de San Martin</p>
      </div>
      <div class="detalleInfoPie">
        <p class="tituloDetalleInfoPie">SUCURSAL 1</p>
        <p class="textoDetalleInfoPie">Federico Proaño S/N</p>
      </div>
      <div class="detalleInfoPie">
        <p class="tituloDetalleInfoPie">SUCURSAL 2</p>
        <p class="textoDetalleInfoPie">Avenida Felipe II, Jose Ortega y Gasset</p>
      </div>

    </div>
  </div>
  <div class="derechos">
    <p>Desarrollado por: Bryam Barrera, Wilmer Durazno, Javier Yunga, Mateo Cordova, Daniel Peralta</p>
    <p>Copyright &copy; 2019 Todos los derechos reservados</p>
  </div>
</footer>

</html>
<style type=text/css>
.fondo{
  background-color: white;
}
.menustyle{
  color: black !important ;
}
</style>