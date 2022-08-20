<?php  
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
        alert("Por favor debes iniciar sesión");
        window.location = "../index.php";
        </script>';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
    <link rel="stylesheet" href="estilosI.css">
</head>
<body>
<a href="inicio.php"><div class="logo"> <img src="../Imagenes/logo.jpg" alt="" width="150px" height="150px"> </div> </a>
    <nav>
        <div class="menu"> <a href="../Perros/perros.html"> PERROS </a> </div>
        <div class="menu"> <a href="../Gatos/index.html"> GATOS </a> </div>
        <div class="menu"> <a href="../Informacion/index.html"> INFORMACIÓN </a> </div>
        <div class="menu"> <a href="../php/cerrar_sesion.php"> CERRAR SESION </a> </div>
    </nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"> <img src="../Imagenes/img1.jpg" alt=""></div>
          <div class="swiper-slide"> <img src="../Imagenes/img2.jpg" alt=""></div>
          <div class="swiper-slide"> <img src="../Imagenes/img3.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="javaI.js"></script>
</body>
</html>