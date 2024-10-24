<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="card p-4 shadow-sm">
                <?php
                    require_once 'clases/Cuadrado.php';
                    require_once 'clases/Rectangulo.php';
                    require_once 'clases/Circulo.php';
                    require_once 'clases/Triangulo.php';

                    if (!isset($_SESSION['tipoFigura'])) {
                        header('Location: index.php');
                    }

                    $tipoFigura = $_SESSION['tipoFigura'];

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['lado1'])) {
                            $_SESSION['lado1'] = $_POST['lado1'];
                        }
                        if ($tipoFigura === 'Rectangulo' && isset($_POST['lado2'])) {
                            $_SESSION['lado2'] = $_POST['lado2'];
                        }
                        if ($tipoFigura === 'Triangulo' && isset($_POST['lado2']) && isset($_POST['lado3'])) {
                            $_SESSION['lado2'] = $_POST['lado2'];
                            $_SESSION['lado3'] = $_POST['lado3'];
                        }
                        if ($tipoFigura === 'Circulo' && isset($_POST['radio'])) {
                            $_SESSION['radio'] = $_POST['radio'];
                        }
                    }

                    echo '<div class="alert alert-info text-center">';
                    if ($tipoFigura === 'Triangulo' && isset($_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3'])) {
                        $triangulo = new Triangulo($_SESSION['tipoFigura'], $_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
                        echo $triangulo;
                    } elseif ($tipoFigura === 'Rectangulo' && isset($_SESSION['lado1'], $_SESSION['lado2'])) {
                        $rectangulo = new Rectangulo($_SESSION['tipoFigura'], $_SESSION['lado1'], $_SESSION['lado2']);
                        echo $rectangulo;
                    } elseif ($tipoFigura === 'Cuadrado' && isset($_SESSION['lado1'])) {
                        $cuadrado = new Cuadrado($_SESSION['tipoFigura'], $_SESSION['lado1']);
                        echo $cuadrado;
                    } elseif ($tipoFigura === 'Circulo' && isset($_SESSION['radio'])) {
                        $circulo = new Circulo($_SESSION['tipoFigura'], $_SESSION['radio']);
                        echo $circulo;
                    }
                    echo '</div>';
                ?>

                <div class="text-center mt-4">
                    <form action="medidas.php" method="get" class="d-inline">
                        <button type="submit" class="btn btn-secondary">Página Anterior</button>
                    </form>
                    <form action="index.php" method="get" class="d-inline">
                        <button type="submit" class="btn btn-primary">Página Principal</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>