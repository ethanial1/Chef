<?php
$op = ($_GET['op']);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <div class="d-flex">
        <div class="bg-primary" id="sidebar-container">
            <div class="logo">
                <h5 class="text-light">Chef</h5>
            </div>
            <div class="menu">
                <a href="" class="d-block text-light p-3"><i class="icon ion-ios-apps mr-2 lead"></i> Home</a>
                <div class="accordion" id="accordionExample">
                    <div class="">
                        <div class="" id="headingTwo">
                            <h2 class="">
                                <button class="btn btn-link btn-block text-left text-light collapsed " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="icon ion-ios-cog lead"></i> 
                                    Administrar
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse bg-light" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="">
                                <a href="Dashboard.php?op=1" class="d-block p-4 "><i class="icon ion-ios-people mr-2"></i>Usuarios</a>
                                <a href="Dashboard.php?op=2" class="d-clock p-4 "><i class="icon ion-ios-bookmarks mr-2"></i>Recetas</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="form-inline my-2 my-lg-0 position-relative">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="buscar">
                        <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-ios-search"></i></button>
                    </form>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon ion-ios-contact lead"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Perfil</a>
                                    <a class="dropdown-item" href="#">Cerrar sesion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="content">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="mb-0">Bienvenido user</h5>
                                <p>Administrador</p>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-primary self-aling-center">Reportes</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container">
                    <?php
                    switch($op){
                        case 1: include('vendedores.php');
                        break;
                        case 2:
                        break;
                    }
                    ?>
                </section>
            </div>
        </div>
        
    </div>









    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <?php
        if ($op == 1){
           
        }else{
            ?>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <?php
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>