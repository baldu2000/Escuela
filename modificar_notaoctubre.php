<?php
include_once "conexion.php";
include_once "Notaoctubre.php";
$nota1 = new Notaoctubre($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudianteoctubre.php?id=" . $_POST["id_estudiante"]);
