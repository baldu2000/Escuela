<?php
include_once "conexion.php";
include_once "Notanoviembre.php";
$nota1 = new Notanoviembre($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudiantenoviembre.php?id=" . $_POST["id_estudiante"]);
