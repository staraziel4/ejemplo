<?php

class Autor {
    private string $nombre;
    private int $edad;
    private string $nacionalidad;

    public function __construct(string $nombre, int $edad, string $nacionalidad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->nacionalidad = $nacionalidad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getNacionalidad(): string {
        return $this->nacionalidad;
    }
    
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function setNacionalidad(string $nacionalidad): void {
        $this->nacionalidad = $nacionalidad;
    }
}
