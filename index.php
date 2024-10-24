<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    ?>
</head>
<body>
    <form action="medidas.php" method="post">
        <h1>¡¡¡BIENVENIDO A LA MEJOR CALCULADORA GEOMÉTRICA DEL MUNDO!!!</h1>
        <fieldset id="figuras" style="max-width: fit-content;">
            <legend id="figuras">Escoge tu figura geométrica</legend>
            <input type="radio" id="Triangulo" name="figuras" value="Triangulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Triangulo') {echo 'checked';}?>>
            <label for="Triangulo">Triángulo</label><br>
            <input type="radio" id="Rectangulo" name="figuras" value="Rectangulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Rectangulo') {echo 'checked';}?>>
            <label for="Rectangulo">Rectángulo</label><br>
            <input type="radio" id="Cuadrado" name="figuras" value="Cuadrado" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Cuadrado') {echo 'checked';}?>>
            <label for="Cuadrado">Cuadrado</label><br>
            <input type="radio" id="Circulo" name="figuras" value="Circulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Circulo') {echo 'checked';}?>>
            <label for="Circulo">Círculo</label>
        </fieldset>
        <br>
        <input type="submit" value="Calcular Figura">
    </form>

    <?php
    session_unset();
    session_destroy();
    ?>
</body>
</html>