<?php
require_once "Autor.php";
require_once "Libro.php";
require_once "Revista.php";
require_once "ImprimirAutor.php";

$autor1 = new Autor("Elena White", 70, "Estadounidense");
$autor2 = new Autor("Gabriel García Márquez", 87, "Colombiano");
$autor3 = new Autor("Julio Verne", 77, "Francés");
$autor4 = new Autor("Isabel Allende", 80, "Chilena");

$imprimirAutor = new ImprimirAutor();
$imprimirAutor->getInfo($autor1);
$imprimirAutor->getInfo($autor2);

$libro1 = new Libro("Cien Años de Soledad", $autor2);
$libro2 = new Libro("Viaje al Centro de la Tierra", $autor3);

$revista1 = new Revista("Revista Adventista", $autor1);
$revista2 = new Revista("Revista Literaria", $autor4);

$publicaciones = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicaciones as $p) {
    $p->getInfo();
}
