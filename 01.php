<?php 
declare(strict_types = 1 );
include 'includes/header.php';

//Definir una clase

class Producto {

    public $nombre;
    public $precio;
    public $disponible;

    public function __construct( string $nombre = 'Sin nombre', int $precio = 0, bool $disponible = false ) {
        $this->nombre     = $nombre;
        $this->precio     = $precio;
        $this->disponible = $disponible;
    }

    public function mostrarProducto() {
        
        echo 'El producto es: ' . $this->nombre . ' y el precio es de: ' . $this->precio;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();
$producto2 = new Producto('Televisor Curvo', 500, true);
$producto2->mostrarProducto();




echo '<pre>';
var_dump( $producto );
echo '</pre>';

echo '<pre>';
var_dump( $producto2 );
echo '</pre>';



include 'includes/footer.php';