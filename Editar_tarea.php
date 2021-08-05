<?php 

include("bd.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id=$id";
    $result = mysqli_query($conexion,$query);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $title=$row['title']; 
        $description=$row['description']; 

    }
}
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description=$_POST['description'];

    $query ="UPDATE task set title ='$title', description='$description' WHERE id = $id";
    mysqli_query($conexion,$query);
    header('location: index.php');
} 


?>
<!---importamos la  cabesera de pagina-->
<?php include("includes/cabesera.php")?>

<div class ="container p-4">
    <div class="row">   
        <div class="col-md-4">
            <div>
                <form action="Editar_tarea.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div>
                        <input type="text" name="title" value="<?php echo $title;?>"
                        placeholder="Editar titulo">
                    </div>
                    <div>
                        <textarea name="description" rows="2" placeholder="Editar description"
                        ><?php echo $description;?></textarea>

                    </div>
                    <button name="update">Guardar</button>
                </form>

            </div>

        </div>
    </div>

</div>
