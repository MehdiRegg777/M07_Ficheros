<h2>PROCESSA CONTACTES</h2>




<table border="1" cellpadding="0" cellspacing="0">
<tr><th>nom</th><th>cognom1</th><th>cognom2</th><th>telèfon</th></tr>
<?php
$lineas = file('contactes31.txt');

if ($lineas !== false) {

    
    foreach ($lineas as $linea) {
        $datos = explode(', ', $linea);
        
        if (count($datos) >= 4) {
            $nom = $datos[0];
            $cognom1 = $datos[1];
            $cognom2 = $datos[2];
            $telefon = $datos[3];
            
            echo "<tr><td>$nom</td><td>$cognom1</td><td>$cognom2</td><td>$telefon</td></tr>";
        }
    }
    $archivoNuevo = fopen('contactes31b.txt','w');
    foreach ($lineas as $linea) {
        $datos = explode(', ', $linea);
        $datonuevo = implode('# ', $datos);
        fwrite($archivoNuevo, $datonuevo);
    }
       
} else {
    echo 'No se pudo cargar el archivo de contactos.';
}

?>
</table>