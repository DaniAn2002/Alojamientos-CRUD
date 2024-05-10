<?php
include_once("../components/connection.php");
$db1 = new DB();
$connection = $db1->connect();
$sql = "SELECT * FROM alojamientos";
$result = mysqli_query($connection, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alojamientos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css">
</head>

<body>

    <!--     1-LANDING PAGE DE ALOJAMIENTOS
    2-CREAR CUENTA E INICIAR SESION
    3-VISTA DE CUENTA DE USUARIO 
    4-FUNCION ELIMINAR ALOJAMIENTOS
    5-USUARIO ADMINISTRADOR -->

    <?php
    include_once("../components/navbar_wo_session.php");
    ?>

    <main>


        <div class="container mt-5 d-flex justify-content-center">

            <div class="flex flex-column">
                <div>
                    <h1 class="mt-3 mb-4">
                        ¿Donde deseas quedarte?
                    </h1>
                    <p>Bienvenido a nuestro sitio web de alojamientos. ¿Estás buscando el lugar perfecto para
                        tu próxima escapada? En nuestro sitio, te ofrecemos una amplia selección de alojamientos
                        para que encuentres el lugar ideal para hospedarte durante tus vacaciones.

                        Ya sea que estés planeando un fin de semana de relax en la playa, una aventura en la
                        montaña o una escapada romántica en la ciudad, tenemos opciones para todos los gustos y
                        presupuestos.

                        Navega por nuestra variedad de hoteles, resorts, casas de vacaciones, apartamentos y
                        mucho más. Utiliza nuestros filtros de búsqueda para encontrar el alojamiento que se
                        adapte a tus necesidades. ¿Quieres una piscina? ¿Vistas al mar? ¿Cerca del centro de la
                        ciudad? ¡Lo tenemos todo!</p>

                </div>
                <?php
                while ($row = mysqli_fetch_array($result)) :
                ?>
                    <a href="">
                        <div class="d-flex align-items-center">


                            <div class="card mt-5 mx-5" style="width: 28rem;">
                                <img src=" <?= $row['img'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['nombre_hospedaje'] ?></h5>
                                    <div class="d-flex justify-content-start">
                                        <h6 class="card-subtitle text-body-secondary mb-3"><?= $row['ciudad'] ?></h6>
                                        <h6 class="card-subtitle text-body-secondary mx-3">$<?= $row['costo_por_dia'] ?> USD noche</h6>
                                    </div>

                                    <p class="card-text mb-3">
                                        <?= $row['descripcion'] ?>
                                    </p>


                                    <a href="#" class="card-link">Reserva ya</a>
                                    <a href="#" class="card-link">Mas informacion</a>

                                </div>
                            </div>

                        <?php
                    endwhile;
                        ?>


                        </div>
                    </a>
            </div>

        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>