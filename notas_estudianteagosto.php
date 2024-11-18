<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
include_once "Materia.php";
include_once "Notaagosto.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
$materias = Materia::obtener();
$notasagosto = Notaagosto::obtenerDeEstudiante($estudiante->id);
$materiasConCalificacion = Notaagosto::combinar($materias, $notasagosto);
?>
<div class="row">
    <div class="col-12">
        <h1>Notas de <?php echo $estudiante->nombre ?></h1>
    </div>
    <div class="col-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Notas del mes de Agosto</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sumatoria = 0;
                foreach ($materiasConCalificacion as $materia) {
                    $sumatoria += $materia["puntaje"];
                ?>
                    <tr>
                        <td>
                            <?php echo $materia["nombre"] ?>
                        </td>
                        <td>
                            <form action="modificar_notaagosto.php" method="POST" class="form-inline">
                                <input type="hidden" value="<?php echo $estudiante->id ?>" name="id_estudiante">
                                <input type="hidden" value="<?php echo $materia["id"] ?>" name="id_materia">
                                <input value="<?php echo $materia["puntaje"] ?>" required min="0" name="puntaje" placeholder="Escriba la calificación" type="number" class="form-control">
                                <button class="btn btn-success mx-2">Guardar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Promedio</td>
                    <td>
                        <strong>
                            <?php
                            $promedio = $sumatoria / count($materias);
                            echo $promedio;
                            ?>
                        </strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php
