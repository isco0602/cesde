<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url();?>access/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>access/css/bootstrap.min.css"> 
        <title></title>
    </head>
    <body>
        <header>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>access/img/logos.jpg" alt="First slide" width="150" height="100"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url();?>index.php/iniciocontroler/principal" class="btn-motocicletas"> Motocicletas <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"> Quienes somos </a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            servicios
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Mecanica</a>
                            <a class="dropdown-item" href="#">Respuestos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">ropa</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="<?php echo base_url();?>index.php/iniciocontroler/registro" class="btn-registro">Registro</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                
            </nav>
        </header>

