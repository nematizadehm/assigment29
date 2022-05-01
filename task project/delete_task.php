<?php
include "database.php";
$tasks_id = $_GET["task_id"];

$db->query( "DELETE FROM taskdata WHERE id = $tasks_id" );

header("Location: index.php");
?>