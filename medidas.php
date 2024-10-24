<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Añadir Medidas</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <div class="card p-4 shadow-sm">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['figuras'])) {
                    $_SESSION['tipoFigura'] = $_POST['figuras'];
                    $tipoFigura = $_POST['figuras'];
                } elseif (isset($_SESSION['tipoFigura'])) {
                    $tipoFigura = $_SESSION['tipoFigura'];
                } else {
                    die('No se ha seleccionado ninguna figura.');
                }

                switch ($tipoFigura) {
                    case 'Triangulo':
                        echo '<form action="resultado.php" method="post" class="form-group">
                                <div class="form-group">
                                    <label for="lado1">Lado 1:</label>
                                    <input type="number" class="form-control" name="lado1" required value="';
                                    if (isset($_SESSION['lado1'])) {
                                        echo $_SESSION['lado1'];
                                    }
                                    echo '">
                                </div>
                                <div class="form-group">
                                    <label for="lado2">Lado 2:</label>
                                    <input type="number" class="form-control" name="lado2" required value="';
                                    if (isset($_SESSION['lado2'])) {
                                        echo $_SESSION['lado2'];
                                    }
                                    echo '">
                                </div>
                                <div class="form-group">
                                    <label for="lado3">Lado 3:</label>
                                    <input type="number" class="form-control" name="lado3" required value="';
                                    if (isset($_SESSION['lado3'])) {
                                        echo $_SESSION['lado3'];
                                    }
                                    echo '">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                            </form>';
                        break;
                    case 'Rectangulo':
                        echo '<form action="resultado.php" method="post" class="form-group">
                                <div class="form-group">
                                    <label for="lado1">Lado 1:</label>
                                    <input type="number" class="form-control" name="lado1" required value="';
                                    if (isset($_SESSION['lado1'])) {
                                        echo $_SESSION['lado1'];
                                    }
                                    echo '">
                                </div>
                                <div class="form-group">
                                    <label for="lado2">Lado 2:</label>
                                    <input type="number" class="form-control" name="lado2" required value="';
                                    if (isset($_SESSION['lado2'])) {
                                        echo $_SESSION['lado2'];
                                    }
                                    echo '">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                            </form>';
                        break;
                    case 'Cuadrado':
                        echo '<form action="resultado.php" method="post" class="form-group">
                                <div class="form-group">
                                    <label for="lado1">Lado:</label>
                                    <input type="number" class="form-control" name="lado1" required value="';
                                    if (isset($_SESSION['lado1'])) {
                                        echo $_SESSION['lado1'];
                                    }
                                    echo '">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                            </form>';
                        break;
                    case 'Circulo':
                        echo '<form action="resultado.php" method="post" class="form-group">
                                <div class="form-group">
                                    <label for="radio">Radio:</label>
                                    <input type="number" class="form-control" name="radio" required value="';
                                    if (isset($_SESSION['radio'])) {
                                        echo $_SESSION['radio'];
                                    }
                                    echo '">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                            </form>';
                        break;
                    default:
                        echo '<div class="alert alert-danger">Figura no válida</div>';
                        break;
                }
                ?>
                <form action="index.php" method="get">
                    <button type="submit" class="btn btn-secondary mt-3">Volver a la Página Principal</button>
                </form>
            </div>
        </div>
    </body>
</html>