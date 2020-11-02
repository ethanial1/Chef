<nav class="barra-nav navbar p-3 shadow <?php if ($idx == 1){echo 'fondo_change ';}?>">
    <div class="home-nav">
        <ul class="nav">
            <li>
                <img src="assets/svg/cinco.svg" alt="">
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?idx=1">Chef</a>
            </li>
        </ul>
    </div>
    <div class="form-inline my-2 my-lg-0">
        <?php
            if (isset($_SESSION['rol'])){
                switch($_SESSION['rol']){
                    case 1://case de administrador
        ?>
                        <li class="lista" style="margin-right: 90px;"><h6><i class="fas fa-user-shield"></i>  <?php echo $nombre?></h6>
                            <ul class="lista-espacio">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="Admin/Dashboard.php?op=1">Administrar</a></li>
                                <li><a href="views/Sesions/cerrar_sesion.php"><i class="fas fa-times"></i> Cerrar</a></li>
                            </ul>
                        </li>
        <?php
                    break;
                    case 2://case de usuario-Chef
        ?>
                        <li>
                            <a href="index.php?idx=5">Perfil</a>
                        </li>
                        <li>
                            <a href="index.php?idx=1">Home</a>
                        </li>
                        <li>
                            <a href="views/Sesions/cerrar_sesion.php" class="m-3">Cerrar Sesión</a>
                        </li>
        <?php
                    break;
                }

            }else{
        ?>
            <li>
                <a href="index.php?idx=3&p=Registrar" class="">Registrate</a>
            </li>
            <li>
                <a href="index.php?idx=4" class="m-3">Inicial sesión</a>
            </li>
        <?php
            }
        ?>
    </div>
</nav>
