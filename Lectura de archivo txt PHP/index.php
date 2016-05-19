<?php 

echo "¡Leer Archivo TEST!</br>";
$resultado = LeerArchivo("archivo.txt");

print_r($resultado);

function LeerArchivo($Nombrearchivo)
{
    $tabla = [];
    $archivo = fopen($Nombrearchivo, "r") or die("Error en lectura del archivo");
    while( !feof($archivo))
    {
        $linea_archivo = fgets($archivo);
        $linea = explode(" ", $linea_archivo);
        array_push($tabla, $linea);
    }
    fclose($archivo);
    return $tabla;
}
		
?>