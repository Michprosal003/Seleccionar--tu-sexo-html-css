<?php 

require_once("connection.php");
$query="SELECT * FROM socio";
$result=mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Consulta del sexo de cada persona</title>
</head>
<body>


<table class="table table-bordered table-hover table-striped">
<tr>
<td>NOMBRES</td>
<td>GENERO</td>
</tr>

<?php 

while($row=mysqli_fetch_array($result))
{ 
    $ID=$row['ID'];
    $Nombres=$row['Nombres'];
    $tipo_genero=$row['tipo_sexo'];

?>

<tr>
<td><?php echo $Nombres?></td>
<td><?php echo $tipo_genero?></td>
</tr>
<?php 
}
?>





    
</body>
</html>