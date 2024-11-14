<?php
class DestinosController {
    // Mostrar lista de destinos
    public function listarDestinos() {
        // Aquí puedes cargar la lista de destinos (por ejemplo, desde una base de datos)
        include_once('view/destinos.php');
    }

    // Mostrar detalles de Cañón del Sumidero
    public function sumidero() {
        include_once('view/sumidero.php');
    }

    // Mostrar detalles de Palenque
    public function palenque() {
        include_once('view/palenque.php');
    }
}
