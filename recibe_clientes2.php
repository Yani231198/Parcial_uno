<?php
    $Codigo = $_POST['Codigo'];
    $Nombres = $_POST['Nombres'];
    $Apellido = $_POST['Apellidos'];
    $Dui = $_POST['Dui'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Email'];
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Dui</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $Codigo ?></td>
                <td><?php echo $Nombre ?></td>
                <td><?php echo $Apellido ?></td>
                <td><?php echo $Dui ?></td>
                <td><?php echo $Direccion ?></td>
                <td><?php echo $Telefono ?></td>
                <td><?php echo $Email ?></td>
            </tr>
        </tbody>
    </table>
</div>