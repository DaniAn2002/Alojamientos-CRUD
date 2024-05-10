<?php
include_once("../components/connection.php");
$db1 = new DB();
$connection = $db1->connect();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="px-4 px-lg-0">

        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Hospedaje</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Precio</div>
                                        </th>

                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Eliminar</div>
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_array($result)) :
                                ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="<?= $row['img'] ?>" alt="" width="150" height="150" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?= $row['nombre_hospedaje'] ?></a>
                                                        </h5><span class="mt-4 text-muted font-weight-normal font-italic d-block">Ubicacion: <?= $row['ubicacion'] ?></span>
                                                        </h5><span class="text-muted font-weight-normal font-italic d-block">Tipo: <?= $row['tipo'] ?></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong>$<?= $row['costo_por_dia'] ?></strong></td>
                                            <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                <?php
                                endwhile;
                                ?>
                            </table>
                        </div>

                        <div>
                            <a href="./home_logged.php">Back Home</a>
                        </div>

</body>

</html>