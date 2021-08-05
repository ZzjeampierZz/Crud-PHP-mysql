<?php 

include("bd.php");

if (isset($_POST['guardar_tarea'])){
    $title = $_POST [ 'titulo'];
    $description =$_POST['descripcion'];

    $query="INSERT INTO task(title , description) VALUES ('$title','$description')";
    
    $resul=mysqli_query($conexion,$query);

    if (!$resul){
        die("Query Failed");

    }
    header("location:index.php");
}
