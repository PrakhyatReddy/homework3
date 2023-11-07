<?php
require_once("util-db.php");
require_once("model-tasks-with-comments.php");
  
$pageTitle ="Tasks with Comments";
include "view-header.php";

// $taskswithcomments = selectTasksWithComments($_GET['id']); 

// $id = isset($_GET['id']) ? $_GET['id'] : 0; // Check if 'id' is set, provide a default value if not
// $taskswithcomments = selectTasksWithComments($id); 

$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Modify the SQL query based on the 'id' value
if ($id > 0) {
    // If 'id' is set, apply the filtering
    $sql = "SELECT
        t.task_id,
        t.title,
        c.comment_txt,
        u.user_name,
        u.user_email,
        a.user_id
    FROM Tasks t
    JOIN Comments c ON t.task_id = c.task_id
    JOIN assignment a ON t.task_id = a.task_id
    JOIN user u ON a.user_id = u.user_id
    WHERE t.task_id = :id";
} else {
    // If 'id' is not set, select all values without filtering
    $sql = "SELECT
        t.task_id,
        t.title,
        c.comment_txt,
        u.user_name,
        u.user_email,
        a.user_id
    FROM Tasks t
    JOIN Comments c ON t.task_id = c.task_id
    JOIN assignment a ON t.task_id = a.task_id
    JOIN user u ON a.user_id = u.user_id";
}


include "view-tasks-with-comments.php";
include "view-footer.php";
?>
