<?php
require_once "Autor.php";

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo "Autor: {$autor->getNombre()}, Edad: {$autor->getEdad()}, Nacionalidad: {$autor->getNacionalidad()}\n\n";
    }
}
