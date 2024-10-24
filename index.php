<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora Geométrica</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="card p-4 shadow-sm">
                <h1 class="text-center mb-4">¡¡¡BIENVENIDO A LA MEJOR CALCULADORA GEOMÉTRICA DEL MUNDO!!!</h1>
                <form action="medidas.php" method="post">
                    <fieldset class="form-group">
                        <legend class="col-form-label">Escoge tu figura geométrica</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="Triangulo" name="figuras" value="Triangulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Triangulo') {echo 'checked';}?>>
                            <label class="form-check-label" for="Triangulo">Triángulo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="Rectangulo" name="figuras" value="Rectangulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Rectangulo') {echo 'checked';}?>>
                            <label class="form-check-label" for="Rectangulo">Rectángulo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="Cuadrado" name="figuras" value="Cuadrado" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Cuadrado') {echo 'checked';}?>>
                            <label class="form-check-label" for="Cuadrado">Cuadrado</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="Circulo" name="figuras" value="Circulo" required <?php if(isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Circulo') {echo 'checked';}?>>
                            <label class="form-check-label" for="Circulo">Círculo</label>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Calcular Figura</button>
                </form>
            </div>
        </div>
        <?php
        session_unset();
        session_destroy();
        ?>
    </body>
</html>
