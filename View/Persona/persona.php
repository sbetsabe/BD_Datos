<div>
    <form action="?c=Persona" method="post">
        <table>
            <!--Encabezado de la tabla-->
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>            
            </thead>
            <!--Fin encabezado tabla-->
            <tbody>
                <?php foreach ($this->model->Lista() as $pe): ?>
                    <?php $valor = $pe->cedula; ?>
                <tr>
                    <td><input type=radio name=id value=<?php echo $pe->cedula; ?> ></td>
                    <td><?php echo $pe->cedula; ?></td>
                    <td><?php echo $pe->nombre; ?></td>
                    <td><?php echo $pe->apellidos; ?></td>
                    <td><?php echo $pe->sexo; ?></td>
                    <td></td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </form>
</div>