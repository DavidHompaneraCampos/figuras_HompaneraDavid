<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="main.js" defer></script>
</head>
<body>
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
                echo '<form action="resultado.php" method="post">
                        <label for="lado1">Lado 1: </label><input type="number" name="lado1" required value="';
                        if (isset($_SESSION['lado1'])) {
                            echo $_SESSION['lado1'];
                        }
                        echo '"><br><br>
                        <label for="lado2">Lado 2: </label><input type="number" name="lado2" required value="';
                        if (isset($_SESSION['lado2'])) {
                            echo $_SESSION['lado2'];
                        }
                        echo '"><br><br>
                        <label for="lado3">Lado 3: </label><input type="number" name="lado3" required value="';
                        if (isset($_SESSION['lado3'])) {
                            echo $_SESSION['lado3'];
                        }
                        echo '"><br><br>
                        <input type="submit" name="calcular" value="Calcular">
                        </form>';
                break;
            case 'Rectangulo':
                echo '<form action="resultado.php" method="post" onsubmit="return validaForm()">
                        <label for="lado1">Lado 1:</label><input type="number" name="lado1" required value="';
                        if (isset($_SESSION['lado1'])) {
                            echo $_SESSION['lado1'];
                        }
                        echo '"><br><br>
                        <label for="lado2">Lado 2:</label><input type="number" name="lado2" required value="';
                        if (isset($_SESSION['lado2'])) {
                            echo $_SESSION['lado2'];
                        }
                        echo '"><br><br>
                        <input type="submit" name="calcular" value="Calcular">
                        </form>';
                break;
            case 'Cuadrado':
                echo '<form action="resultado.php" method="post">
                        <label for="lado1">Lado:</label><input type="number" name="lado1" required value="';
                        if (isset($_SESSION['lado1'])) {
                            echo $_SESSION['lado1'];
                        }
                        echo '"><br><br>
                        <input type="submit" name="calcular" value="Calcular">
                        </form>';
                break;
            case 'Circulo':
                echo '<form action="resultado.php" method="post">
                        <label for="radio">Radio:</label><input type="number" name="radio" required value="';
                        if (isset($_SESSION['radio'])) {
                            echo $_SESSION['radio'];
                        }
                        echo '"><br><br>
                        <input type="submit" name="calcular" value="Calcular">
                        </form>';
                break;
            default:
                echo 'Figura no válida';
                break;
        }

        echo '<br><form action="index.php" method="get">
            <input type="submit" value="Volver a la Página Principal">
        </form>';
    ?>
</body>
</html>