<?php
include_once "conexion.php";
include_once "Notajunio.php";
$nota1 = new Notajunio($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudiante3.php?id=" . $_POST["id_estudiante"]);
