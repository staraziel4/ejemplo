<?php
require_once "Autor.php";
require_once "IPublicable.php";

class Revista implements IPublicable {
    private string $titulo;
    private Autor $autor;

    public function __construct(string $titulo, Autor $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getInfo(): void {
        echo "📰 Revista: {$this->titulo}\n";
        echo "Editor: {$this->autor->getNombre()} ({$this->autor->getEdad()} años, {$this->autor->getNacionalidad()})\n\n";
    }
}
