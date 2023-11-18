<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CRUD</title>
 
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
<body>
    <?php
    require 'conexion.php';

    $sql= "SELECT * FROM libreria;";
    $resultado= $conn->query($sql);
    ?>
    <div>
    <h1 class="cabecera">Mostar Registros</h1>
    </div>
    <div class="contenedor" >
    <button class="crear"><a href="index.php">Agregar Nuevo Registro</a></button>

        <table>
            <thead>
                <tr>
              
                
                    <th scope="col">nombre</th>
                    <th scope="col">autor</th>
                    <th scope="col">precio</th>
                    <th scope="col"> disponible</th>
                    <th scope="col">acciones</th>
                   </tr >
            </thead>
            <tbody>
                <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    
                    <td><?php  echo $fila['nombre']?></td>
                    <td><?php  echo $fila['autor']?></td>
                    <td><?php  echo $fila['precio']?></td>
                    <td><?php  echo $fila['disponible']?></td>
                    <th>
                    <a href="eliminar.php?Id=<?php echo $fila['id']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                    <a href="editar.php?Id=<?php echo $fila['id']?>" class="btn btn-warning" onclick="return confirmacion()">editar</a>
                    </th>
                   
                   
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>
</body>
</html>