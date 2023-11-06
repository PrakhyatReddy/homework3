<?php
require_once("util-db.php");
require_once("model-tasks-with-comments.php");
  
$pageTitle ="Tasks with Comments";
include "view-header.php";
$taskswithcomments = selectTasksWithComments($_GET['task_id']); 
include "view-tasks-with-comments.php";
include "view-footer.php";
?>
