<?php
include_once "conexion.php";
include_once "Nota3.php";
$nota1 = new Nota3($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudiante3.php?id=" . $_POST["id_estudiante"]);
