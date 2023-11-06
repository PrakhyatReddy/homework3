<?php
function selectTasksWithComments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT
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
WHERE t.task_id=?");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
