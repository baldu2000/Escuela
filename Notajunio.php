<?php
class Notajunio
{
    private $puntaje, $idEstudiante, $idMateria;

    public function __construct($puntaje, $idEstudiante, $idMateria)
    {
        $this->puntaje = $puntaje;
        $this->idEstudiante = $idEstudiante;
        $this->idMateria = $idMateria;
    }

    public function guardar()
    {
        global $mysqli;
        // La eliminamos en caso de que exista
        $this->eliminar();
        // Y siempre la insertamos. No importa si es la primera vez o es una actualización
        $sentencia = $mysqli->prepare("INSERT INTO notas_estudiantes_materias2
            (id_estudiante, id_materia, puntaje)
                VALUES
                (?, ?, ?)");
        $sentencia->bind_param("ssd", $this->idEstudiante, $this->idMateria, $this->puntaje);
        $sentencia->execute();
    }

    public static function obtenerDeEstudiante($idEstudiante)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, id_estudiante, id_materia, puntaje FROM notas_estudiantes_materias2 WHERE id_estudiante = ?");
        $sentencia->bind_param("i", $idEstudiante);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public static function combinar($materias, $notasjunio)
    {
        for ($x = 0; $x < count($materias); $x++) {
            $materias[$x]["puntaje"] = self::obtenerCalificacion($notasjunio, $materias[$x]["id"]);
        }
        return $materias;
    }

    private static function obtenerCalificacion($notasjunio, $idMateria)
    {
        foreach ($notasjunio as $notasjunio) {
            if (intval($notasjunio["id_materia"]) === intval($idMateria)) {
                return $notasjunio["puntaje"];
            }
        }
        return 0;
    }


    public function eliminar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM notas_estudiantes_materias2 WHERE id_estudiante = ? AND id_materia = ?");
        $sentencia->bind_param("ii", $this->idEstudiante, $this->idMateria);
        $sentencia->execute();
    }
}
