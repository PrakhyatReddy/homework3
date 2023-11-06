<?php
require_once("util-db.php");
require_once("model-tasks.php");
  
$pageTitle ="Tasks";
include "view-header.php";
$tasks = selectTasks(); 
include "view-tasks.php";
include "view-footer.php";
?>
