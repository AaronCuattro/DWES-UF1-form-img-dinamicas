<?php
    class Actividad {

        public $titulo;
        public $ciudad;
        public $fecha;
        public $tipo;
        public $precio;

        function __construct($titulo, $ciudad, $fecha, $tipo, $precio) {
            $this -> titulo = $titulo;
            $this -> ciudad = $ciudad;
            $this -> fecha = $fecha;
            $this -> tipo = $tipo;
            $this -> precio = $precio;

        }
    }
?>