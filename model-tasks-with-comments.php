<?php
function selectTasksWithComments($task_id) {
    try {
        $conn = get_db_connection();
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
        WHERE t.task_id = :task_id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':task_id', $task_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;  // Close the database connection

        return $result;
    } catch (PDOException $e) {
        throw $e;
    }
}

?>


