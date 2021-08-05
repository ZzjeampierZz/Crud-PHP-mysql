    <!---importamos la  conexion de la base de datos para la pagina-->
<?php include("bd.php")?>
    <!---importamos la  cabesera de pagina-->
<?php include("includes/cabesera.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-4">         
           <div class="card card-body">               
             <form action="Guardar_tarea.php" method ="POST" >
                <div class="form-group">
                        <input type="text" name="titulo" class="from-control"
                        placeholder="Titulo de la tarea" autofocus>
                </div>             
                <div class="form-group">        
                    <textarea name="descripcion" rows="2" class="form-control"
                    placeholder="Describe tu tarea"></textarea>
                </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="guardar_tarea" value="Guardar Tarea">                 
               </form>
            </div>
        </div>
        <div class="col-md-8">            
            <table id="table">
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Fecha de Creacion</th>
                    <th>Acciones</th>          
                    <?php 
                    $query = "SELECT * FROM task";
                    $resul_tareas = mysqli_query($conexion,$query);
                    while ($row = mysqli_fetch_array($resul_tareas)){?>
                        <tr id="tr2">
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="Editar_tarea.php?id=<?php echo $row['id']?>">
                                <img src="img-icons/cepillo.png" alt="edit" width="25px" height="35px">                       
                                </a>
                                <a href="Borrar_tarea.php?id=<?php echo $row['id']?>">
                                <img src="img-icons/borrar.png" alt="edit" width="25px" height="35px">
                                </a>
                            </td>       
                        </tr>
                    <?php }?>
            </table>
        </div>
    </div>
</div>
    <!---importamos la  cuerpo de pagina-->
 <?php include("includes/cuerpo.php")?>