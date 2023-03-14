<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!--MENU-->
    <div class="container">
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">TI amu</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MAS..</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">vISISTANOS </a></li>
            <li><a class="dropdown-item" href="#">SOBRE NOSOTROS </a></li>
            <li><a class="dropdown-item" href="#">CONTACTO </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">MAS..</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Navega</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Personas </a>
        </li>
        </ul>
    </div>
<!--FIN MENU-->

    


<!--FORMULARIO-->

    <div class="container">
        <form action="" method="post">
            <label for="" class="mt-5"> RESPUESTAS CALCULADAS </label>
            <br>
            <label for="" class="mt-2"> valor 1 = <?php echo $dato1, "<br>"; ?> </label>
            <br>
            <label for="" class="mt-2"> valor 2 = <?php echo $dato2, "<br>"; ?>  </label>
            <br>
            <label for="" class="mt-2"> respuestas : <?php echo $rta, "<br>"; ?></label>
            <br> 
            <hr>
            <input type="button" value=";) ;) ;)">
        </form>
    </div>

<!--FIN FORMULARI0-->


</body>
</html>