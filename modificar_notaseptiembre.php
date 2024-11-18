<?php
include_once "conexion.php";
include_once "Notaseptiembre.php";
$nota1 = new Notaseptiembre($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudianteseptiembre.php?id=" . $_POST["id_estudiante"]);
