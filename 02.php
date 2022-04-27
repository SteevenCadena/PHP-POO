<?php 
declare(strict_types = 1 );
include 'includes/header.php';

//Definir una clase

class Producto {

    //public Acceder y modificar en cualquier lugar
    //protected Solo se accede y modificar en la clase
    //pivate solo miembros de la clase pueden acceder
    public function __construct( protected string $nombre = 'Sin nombre', public int $precio = 0, public bool $disponible = false ) {
        $this->nombre     = $nombre;
        $this->precio     = $precio;
        $this->disponible = $disponible;
    }

    public function mostrarProducto() : void {
        
        echo 'El producto es: ' . $this->nombre . ' y el precio es de: ' . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre( string $nombre ) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);

echo $producto->getNombre();

$producto2 = new Producto('Televisor Curvo', 500, true);
echo $producto2->getNombre();


$producto->setNombre('PC');

echo '<pre>';
var_dump( $producto );
echo '</pre>';

// echo '<pre>';
// var_dump( $producto2 );
// echo '</pre>';



include 'includes/footer.php';