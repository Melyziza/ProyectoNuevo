
<?php
include '../lib/Conexion.php';
/*Instacion */
$conn=new Conexion;

if ($conn->conectar())
{  
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];


$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totusd,$ano)";

echo $sql;
}

$sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
        $resultado = $miconn->query($sqlip);
        


//Consultas de seleccion que devuelven un conjunto de resultados
        if($resultado = $miconn->query($sql))
        {
        //liberar el conjunto de resultados
        $miconn->close();
        }     
        
        ?>