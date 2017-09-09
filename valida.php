<?php

    $id_salon = $_POST['id_salon'];
    $id_ini = $_POST['id_ini'];
    $id_fin = $_POST['id_fin'];

    $valida = new Valida($id_salon, $id_ini, $id_fin);

    class Valida {

        private $id_salon;
        private $id_ini;
        private $id_fin;
        private $id_salon_existente;
        private $id_ini_existente;
        private $id_fin_existente;

        function __construct($id_salon, $id_ini, $id_fin) {
            $this->id_salon = $id_salon;
            $this->id_ini = $id_ini;
            $this->id_fin = $id_fin;
            $this->id_salon_existente = 45;
            $this->id_ini_existente = 9;
            $this->id_fin_existente = 11;
            $this->comprobarDisponibilidad();
        }

        private function comprobarDisponibilidad() {
            echo "Id Salon: $this->id_salon_existente <br /> Id Inicio: $this->id_ini_existente <br /> Id Fin: $this->id_fin_existente
                  <br /><br />Id Salon Nuevo: $this->id_salon <br /> Id Inicio Nuevo: $this->id_ini <br /> Id Fin Nuevo: $this->id_fin";
            if ($this->id_salon_existente == $this->id_salon) {
                if ($this->id_ini_existente == $this->id_ini) {
                    echo "<br /><br /><br />YA EXISTE UNA RESERVACION QUE INICIA A LAS $this->id_ini";
                } else {
                    if ($this->id_ini_existente == $this->id_fin) {
                        echo "<br /><br /><br />EXISTE UNA RESERVACION QUE INICIA A LAS $this->id_fin DEBES DEJAR MEDIA HORA ENTRE EVENTOS";
                    } elseif ($this->id_fin_existente == $this->id_ini) {
                        echo "<br /><br /><br />EXISTE UNA RESERVACION QUE TERMINA A LAS $this->id_ini DEBES DEJAR MEDIA HORA ENTRE EVENTOS";
                    } elseif (($this->id_fin > $this->id_ini_existente) && ($this->id_fin <= $this->id_fin_existente)) {
                        echo "<br /><br /><br />EXISTE UNA RESERVACIÓN DE $this->id_ini_existente A $this->id_fin_existente";
                    } elseif (($this->id_ini >= $this->id_ini_existente) && ($this->id_ini <= $this->id_fin_existente)) {
                        echo "<br /><br /><br />EXISTE UNA RESERVACIÓN DE $this->id_ini_existente A $this->id_fin_existente";
                    }
                    else {
                        echo "<br /><br /><br />HACER RESERVACIÓN";
                    }
                }
            } else {
                echo "<br /><br /><br />SALON DISPONIBLE!!!";
            }

        }

    }

?>
