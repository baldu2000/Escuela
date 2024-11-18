<?php
include_once "conexion.php";
include_once "Nota2.php";
$nota1 = new Nota2($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota1->guardar();
header("Location: notas_estudiante2.php?id=" . $_POST["id_estudiante"]);
