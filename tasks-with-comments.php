<?php
require_once("util-db.php");
require_once("model-tasks-with-comments.php");
  
$pageTitle ="Tasks with Comments";
$taskswithcomments = selectTasksWithComments($_GET['id']); 
include "view-header.php";
include "view-tasks-with-comments.php";
include "view-footer.php";
?>
