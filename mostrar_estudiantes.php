<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes Básica</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas Febrero</th>
                    <th>Notas Marzo</th>
                    <th>Notas Abril</th>
                    <th>Notas Mayo</th>
                    <th>Notas Junio</th>
                    <th>Notas Julio</th>
                    <th>Notas Agosto</th>
                    <th>Notas Septiembre</th>
                    <th>Notas Octubre</th>
                    <th>Notas Noviembre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td><?php echo $estudiante["nombre"] ?></td>
                        <td><?php echo $estudiante["grupo"] ?></td>
                        <td>
                            <a href="notas_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Febrero
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiante1.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Marzo
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiante2.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Abril
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiante3.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Mayo
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiantejunio.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Junio
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiantejulio.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Julio
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudianteagosto.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Agosto
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudianteseptiembre.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Septiembre
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudianteoctubre.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Octubre
                            </a>
                        </td>
                        <td>
                            <a href="notas_estudiantenoviembre.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-info">
                                Notas Noviembre
                            </a>
                        </td>
                        <td>
                            <a href="editar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
