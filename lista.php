<?php  

include("conectar/conexion.php");

$Sql_oficina=mysqli_query($con,"SELECT `ID`, `NameUser`, `ContraUser` FROM `usuario`");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icons bostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- NAV -->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
       <a class="navbar-brand" href="#">
           Lista Usuarios
       </a>
    </div>
  </nav>
    <!-- NAV -->
    <!-- TABLEs -->
    <div class="container">
      <div class="row">
        <div class="col-6">
          <table class="table mt-2">
            <thead>
                <tr>
                   <th scope="col">ID</th>
                   <th scope="col">correo</th>
                   <th scope="col">password</th>
                   <th scope="col">Acciones</th>
                </tr>
           </thead>
           <tbody> 
<?php 
while ($fila_user=mysqli_fetch_array($Sql_oficina)) {
?>
            <tr scope="row">
                <td><?php echo $fila_user["ID"]; ?></td>
                <td><?php echo $fila_user["NameUser"] ?></td>
                <td><?php echo $fila_user["ContraUser"] ?></td>
                <th>
            	<a href="#"><button class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
            	<a href="Acciones/Eliminar.php?id=<?php echo $fila_user["ID"]; ?>"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
            	</th>
            </tr>
            
<?php 
}
?>
           </tbody>
          </table>
        </div>
      </div>
    </div>



    <!-- TABLES -->







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>