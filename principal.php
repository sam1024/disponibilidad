<!DOCTYPE html>
<?php

    $comprobar = new Comprobar();
    $comprobar->pintaHtml();

    class Comprobar {

        private $id_salon;
        private $id_ini;
        private $id_fin;

        function __construct()
        {
            $this->id_salon = 45;
            $this->id_ini = 9;
            $this->id_fin = 11;
        }

        function pintaHtml() {
            echo "<html>
                    <head>
                        <meta charset='utf-8'>
                        <title>Comprobar Disponibilidad</title>
                    </head>
                    <body>
                        <div id='principal'>
                            <h3>Id Salon: " . $this->id_salon . "</h3>
                            <h3>Id Inicio: " . $this->id_ini . "</h3>
                            <h3>Id Fin: " . $this->id_fin . "</h3>
                        </div>
                        <div id='fields'>
                            <form action='valida.php' method='POST'>
                                <input type='text' name='id_salon' placeholder='Id Salón'>
                                <input type='text' name='id_ini' placeholder='Id Inicio'>
                                <input type='text' name='id_fin' placeholder='Id Fin'>
                                <button>Enviar</button>
                            </form>
                        </div>
                    </body>
                  </html>";
        }
    }


?>
