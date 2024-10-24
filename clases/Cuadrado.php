<?php
    require_once 'FiguraGeometrica.php';

    class Cuadrado extends FiguraGeometrica {
        
        public function __construct($tipoFigura, $lado1) {
            parent::__construct($tipoFigura, $lado1);
        }

        public function calcularArea() {
            $lado = floatval($this->lado1);
            return $lado * $lado;
        }
    
        public function calcularPerimetro() {
            $lado = floatval($this->lado1);
            return 4 * $lado;
        }

        public function __toString() {
            return "Tipo de figura: " . $this->tipoFigura . 
                   "<br>Lado: " . $this->lado1 . 
                   "<br>Área: " . $this->calcularArea() . 
                   "<br>Perímetro: " . $this->calcularPerimetro();
        }

        public function __destruct() {
        }
    }
?>