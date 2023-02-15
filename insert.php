<?php 

require_once("connection.php");
if(isset($_POST['submit']))
{
    if(empty($_POST['Nombres']) || empty($_POST['tipo_sexo']))
    {
        echo"Selecciona tu sexo";
    }

    else 
    {

    $Nombres=$_POST['Nombres'];
    $tipo_genero=$_POST['tipo_sexo'];

    $query="INSERT INTO socio(Nombres,tipo_sexo)VALUES('$Nombres','$tipo_genero')";
    $result=mysqli_query($conn,$query);

    if($result) 
    {
        header("location:view.php");
    }

    else 
    {
        echo"Revisa tu query nuevamente";
    }
}
}
else 
{
    header("localhost:index.html");
}




?>

