<?php
    require_once 'FiguraGeometrica.php';

    class Rectangulo extends FiguraGeometrica {
        private $lado2;

        public function __construct($tipoFigura, $lado1, $lado2) {
            parent::__construct($tipoFigura, $lado1);
            $this -> lado2 = $lado2;
        }

        public function calcularArea() {
            return floatval($this -> lado1) * floatval($this -> lado2);
        }
        
        public function calcularPerimetro() {
            return 2 * (floatval($this -> lado1) + floatval($this -> lado2));
        }

        public function __toString() {
            return "Tipo de figura: " . $this -> tipoFigura . 
                   "<br>Lado 1: " . $this -> lado1 . 
                   "<br>Lado 2: " . $this -> lado2 . 
                   "<br>Área: " . $this -> calcularArea() . 
                   "<br>Perímetro: " . $this -> calcularPerimetro();
        }

        public function __destruct() {
        }
    }
?>