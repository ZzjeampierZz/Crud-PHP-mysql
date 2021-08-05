<?php 

include("bd.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id=$id";
    $result = mysqli_query($conexion,$query);
    if(!$result){
        die("Query failed");
    }
    header("location:index.php");
}
?>