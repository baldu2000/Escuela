<?php
include_once "conexion.php";
include_once "Notajulio.php";
$nota1 = new Notajulio($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudiantejulio.php?id=" . $_POST["id_estudiante"]);
