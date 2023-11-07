<?php
require_once("util-db.php");
require_once("model-tasks-with-comments.php");
  
$pageTitle ="Tasks with Comments";
include "view-header.php";

// $taskswithcomments = selectTasksWithComments($_GET['id']); 

// $id = isset($_GET['id']) ? $_GET['id'] : [1:6]; // Check if 'id' is set, provide a default value if not
// $taskswithcomments = selectTasksWithComments($id); 

$id = isset($_GET['id']) && in_array($_GET['id'], range(1, 6)) ? $_GET['id'] : range(1, 6);
$taskswithcomments = selectTasksWithComments($id);

include "view-tasks-with-comments.php";
include "view-footer.php";
?>
