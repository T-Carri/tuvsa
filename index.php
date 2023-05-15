<!DOCTYPE html>
<html>
  <head>
    <title>Tuvsa</title>
    <style>
      /* Estilos CSS */
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }
      .header, footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

h1, h2, h3 {
  color: #333;
  font-family: 'Open Sans', sans-serif;
}
      nav {
        background-color: #f2f2f2;
        padding: 10px;
      }
      nav .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      nav img {
        height: 40px;
        margin-right: 10px; 
        margin-left:15px;
        margin-top:20px;
      }
      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: flex-end;
      }
      nav li a {
        text-decoration: none;
        color: #333;
        padding: 5px;
        margin-left: 10px;
      }
      nav a {
        color: #333;
        text-decoration: none;
        padding: 5px;
        margin-left: 10px;
        background-color: #f2f2f2;
        border-radius: 5px;
        transition: all 0.3s ease;
      }
      nav a:hover {
  background-color: #333;
  color: #fff;
  transform: translateY(-2px);
}
      .im {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 400px;
  width: 100%;
  margin: auto;
}

.im img {
  max-width: 100%;
  max-height: 100%;
}

      main {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 20px;
      }
      section {
  background-color: #f2f2f2;
  padding: 20px;
  margin: 10px;
  flex-basis: calc(33.33% - 20px);
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


      section h2 {
        margin-top: 0;
      }
      footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
      .welcome-message {
  margin-top: 50px;
  font-size: 24px;
  font-weight: bold;
}

.welcome-message h1 {
  font-size: 48px;
  margin-bottom: 20px;
}
    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<img src="/img/LOGO_TUVSA_B.svg" alt="LOGO_TUVSA_B">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php" onClick={scrollToSection0()}>Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onClick={scrollToSection1()} >Servicios</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" onClick={scrollToSection2()}>Contacto</a>
      </li>
     
      
    </ul>
    
  </div>
</div>
</nav>



<div class="container" style="display: flex; height: 100vh;">
  <div class="video-container" style="width: 50%; display: flex; flex-direction: row;">
    <video src="assets/video.mp4" style="width: 100%; height: ; object-fit: cover; margin-right: 20px;" controls></video>
  </div>
  <div class="welcome-container" style="width: 50%; display: flex; justify-content: center; align-items: center;">
    <div class="welcome-message" style="text-align: center;">
      <h1>Bienvenidos a nuestra pagina TUVSA</h1>
      <p>Un mejor transporte</p>
    </div>
  </div>
</div>


<!-- 
<div class="container" style="display: flex; height: 100vh;">
  <div class="video-container" style="width: 50%; display: flex; flex-direction: row;">
 <video src="assets/video.mp4" style="width: 100%; height: ; object-fit: cover; margin-right: 20px;" controls></video> 

   <video src="assets/video.mp4" style="width: 100%; height: ; object-fit: cover; margin-right: 20px;" autoplay loop></video>

  </div>
  <div class="welcome-container" style="width: 50%; display: flex; justify-content: center; align-items: center;">
    <div class="welcome-message" style="text-align: center;">
      <h1>Bienvenidos a nuestra página web</h1>
      <p>Texto de presentación</p>
    </div>
  </div>
</div> -->


    <main>



      <section>
      <img src="/img/LOGO_TUVSA_B.svg"  alt="Imagen aleatoria" />

        <h2>Transporte siempre disponible</h2>
        <p>Nuestras unidades siempre disponibles para su buen uso, pues procuramos hacer un servicio mecanico cada semana.</p>
      </section>
      <section>
        <img src="/img/1.jpg" alt="Imagen aleatoria" width="500" height="300" />
        <h2>Unidades limpias</h2>
        <p>  La ruta garantiza que nuestros vehículos estén siempre en excelentes condiciones de limpieza y mantenimiento.</p>
      </section>
      <section>
        <img src="/img/2.jpg" alt="Imagen aleatoria" width="500" height="300" />
        <h2>Seguro de pasajeros</h2>
        <p>También contamos con seguros de pasajeros que brindan tranquilidad y seguridad a nuestros pasajeros durante sus viajes.</p>
      </section>
      <section>
        <img src="/img/LOGO_TUVSA_B.svg" alt="Imagen aleatoria" />
        <h2>Choferes certificados</h2>
        <p>os enorgullece contar con conductores certificados y altamente capacitados para brindar el mejor servicio posible a nuestros pasajeros.</p>
      </section>
 
</main>
<footer>

<?php

include "assets/inc/footer.inc";

?>

<p>Derechos reservados © 2023</p>
</footer>

  </body>

  <script>
    const  scrollToSection0  = () => {
  if(typeof window!='undefined'){window.scrollTo({
    top: 500,
    behavior:"smooth"
  })}
  
}
  </script>
    <script>
    const  scrollToSection1  = () => {
  if(typeof window!='undefined'){window.scrollTo({
    top: 850,
    behavior:"smooth"
  })}
  
}
  </script>
    <script>
    const  scrollToSection2  = () => {
  if(typeof window!='undefined'){window.scrollTo({
    top: 3000,
    behavior:"smooth"
  })}
  
}
  </script>
</html>


