<?php
session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Beginning Care</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php"> Inicio  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">Nosotros</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Servicios</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#customer">Cosmetologos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Dudas</a>
                              </li>
                              
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo3.png" alt="#" width="60px"/></a><h4>Beginning Care</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <?php if (isset($user)): ?>
        
                           <p>Hola <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">cerrar sesión</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></a><b>Iniciar sesión</p> </b>
 <a href="signup.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg></a><b>Registrar usuario</p></b>
        
    <?php endif; ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Bienvenido a</span>
                                 <h1>Beginning Care</h1>
                                 <p>Recomendamos productos para maquillaje y cuidado facial para tener una cara mejor sana.</p>
                              </div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
</svg>Nuestros servicios</h2>
                  </div>
               </div>
            </div>
            <div class="services">
               <div class="row">
                  <div class="col-md-4">
                     <div id="hover_chang" class="service_box">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clipboard2" viewBox="0 0 16 16">
  <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z"/>
  <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
</svg></i>
                        <h3>Test</h3>
                        <p><a href="menutest.php">Recomendaciones para elegir tu producto.<br> Realiza los siguientes tests</a></p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="hover_chang" class="service_box">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg></i>
                       <h3>Foro</h3>
                        <p><a href="foro.php"> Comparte tu experiencia sobre el test con más clientes</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2><svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
</svg>Sobre Beginning Care</h2>
                     <p>Es una empresa dedicada a la promoción de marcas de cosméticos para el área de maquillaje 
                        y cuidado de la piel, incluyendo una realización de un test para proporcionar una 
                        recomendación de los productos que puedan servir para, como mencionamos anteriormente, 
                        maquillarse y cuidar la piel. Se considera una Asociación y/o Sociedad puesto que todos 
                        los miembros son socios de la empresa ya que aportaron cada uno una parte para fundar la 
                        empresa y también es considerada una Microempresa ya que esta cuenta con menos de 10 
                        trabajadores pues es la primera vez que creamos una empresa.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>


  

<!-- end customer -->
 <!-- customer --> 


      <div id="customer" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
</svg>Cosmetologos</h2>
<div align="center"><h2><a href="cosmetologos.php">pulsa aqui para más información</a></h2></div>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/bellissima.jpg" alt="bellissima" style="width:35%;"/></i>
                              
                              <h4>Bellísima Clinic</a></h4>
                              
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/dermoart.png" alt="der"style="width:35%;"/></i>
                              <h4>Dermoart Salon & Spa</h4>
                        
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/skinreal.jpg" alt="skin" style="width:35%;"/></i>
                              <h4>Skin Real Clínica de Belleza</h4>
                             
                           
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/bioeza.jpg" alt="bio" style="width:35%;"/></i>
                              <h4>Bioeza Clínica de Belleza</h4>
                              
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/krishna.jpg" alt="krish" style="width:35%;"/></i>
                              <h4>Krishna Balcázar Cosmetologa</h4>
                            
                              <img src="images/icon.png" alt="#"/>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <end customer -->
      
      </div>
     
                              
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">


 <!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTOS</h2>
  <div class="row">
    <div class="col-sm-5">
 
      <p><span class="glyphicon glyphicon-map-marker"></span><b> Ensenada, Baja California, Mexico</p></b>

      
      <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
   <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
   </svg>(+646) 259 3611</a></li></p>

      
      <li><a href="#"><h3><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>beginningcare@gmail.com</a></p>
            <h3>Redes Sociales</h3>
                              <ul class="infometion">
                                 <a href="#"><img src="images/facebook.png" alt="Logo Facebook" width="40px"></a>
                                 <a href="#"><img src="images/instagram.png" alt="Logo Instagram" width="40px"></a>
                                 <a href="#"><img src="images/gorjeo.png" alt="Logo Twitter" width="40px"></a>
                                 <a href="#"><img src="images/youtube.png" alt="Logo Youtube" width="40px"></a>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="correo electronico" type="email" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="cellphone" name="Phone Number" placeholder="Número de celular" type="celular" required>

        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>








               <!--div class="col-md-12">
                  <div class="titlepage">
                     <h2><svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
</svg>¿Tienes alguna duda o sugerencia?<span class="white"> Déjanos tu mensaje</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="center-form">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Nombre completo" type="type" name="Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Correo electrónico" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Número de celular" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name"></textarea>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <button class="send_btn">Enviar</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div-->

         
      </div>
      <!-- end contact -->
      <!--  footer >
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contáctanos</h3>
                              <ul class="numero cel">
                                 <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
   <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
   </svg>(+646) 259 3611</a></li>
                              </ul>
                           </div>
                           <div class="row">
                              <div class="col-md-6 offset-md-1 padd_bottom">
                                 <div class="email">
                                    <ul class="correo electronico">
                                       <li><a href="#"><h3><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>beginningcare@gmail.com</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>Mantenimiento</h3>
                              <ul class="infometion">
                                 <li><a href="#">Próximamente</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>Redes Sociales</h3>
                              <ul class="infometion">
                                 <a href="#"><img src="images/facebook.png" alt="Logo Facebook" width="40px"></a>
                                 <a href="#"><img src="images/instagram.png" alt="Logo Instagram" width="40px"></a>
                                 <a href="#"><img src="images/gorjeo.png" alt="Logo Twitter" width="40px"></a>
                                 <a href="#"><img src="images/youtube.png" alt="Logo Youtube" width="40px"></a>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 Todos los derechos están reservados.</p>
                     </div>
                  </div>
               </div>
            </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

