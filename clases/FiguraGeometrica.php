<?php
    class FiguraGeometrica {
        protected $tipoFigura;
        protected $lado1;

        public function __construct($tipoFigura, $lado1) {
            $this -> tipoFigura = $tipoFigura;
            $this -> lado1 = $lado1;
        }

        public function getTipoFigura() {
            return $this -> tipoFigura;
        }
        
        public function setTipoFigura($tipoFigura) {
            $this -> tipoFigura = $tipoFigura;
        }

        public function getLado() {
            return $this -> lado;
        }
        
        public function setLado($lado) {
            $this -> lado = $lado;
        }

        public function calcularArea() {
        }

        public function __toString() {
            return "Tipo de figura: " . $this->tipoFigura . 
                   "\nLado: " . $this->lado1 . 
                   "\nÁrea: " . $this->calcularArea() . 
                   "\nPerímetro: " . $this->calcularPerimetro();
        }
    
        public function __destruct() {
        }
    }
?>