<?php
    require_once 'FiguraGeometrica.php';

    class Circulo extends FiguraGeometrica {

        public function __construct($tipoFigura, $lado1) {
            parent::__construct($tipoFigura, $lado1);
        }

        public function calcularArea() {
            return pi() * pow(floatval($this -> lado1), 2);
        }
        
        public function calcularPerimetro() {
            return 2 * pi() * floatval($this -> lado1);
        }

        public function __toString() {
            return "Tipo de figura: " . $this -> tipoFigura . 
                   "<br>Radio del círculo: " . $this -> lado1 . 
                   "<br>Área: " . $this -> calcularArea() . 
                   "<br>Perímetro: " . $this -> calcularPerimetro();
        }

        public function __destruct() {
        }
    }
?>