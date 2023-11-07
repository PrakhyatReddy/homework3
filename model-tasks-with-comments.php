<?php
function selectTasksWithComments($id) {
    require("util-db.php");
    
    // Define the base SQL query
    $sql = "SELECT t.task_id, t.title, c.comment_txt, u.user_name, u.user_email, t.status FROM Tasks t
            JOIN Comments c ON t.task_id = c.task_id
            JOIN assignment a ON t.task_id = a.task_id
            JOIN user u ON a.user_id = u.user_id";
    
    // Check if 'id' is set and modify the query accordingly
    if ($id > 0) {
        $sql .= " WHERE t.task_id = $id";
    }
    
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error executing the query: " . $conn->error);
    }
    
    $data = array();
    
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    $conn->close();
    
    return $data;
}

?>
