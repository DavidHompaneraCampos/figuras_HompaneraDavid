<?php
    session_start();

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

    echo '<form action="medidas.php" method="get">
        <br><input type="submit" value="Página Anterior">
    </form>';
    echo '<form action="index.php" method="get">
        <input type="submit" value="Página Principal">
    </form>';
?>