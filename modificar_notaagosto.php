<?php
include_once "conexion.php";
include_once "Notaagosto.php";
$nota1 = new Notaagosto($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudianteagosto.php?id=" . $_POST["id_estudiante"]);
