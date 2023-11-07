<?php
function selectCommentsByUser($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT
    a.user_id,
    u.user_name,
    t.title,
    c.comment_txt,
    u.user_email,
    t.status
FROM Tasks t
JOIN Comments c ON t.task_id = c.task_id
JOIN assignment a ON t.task_id = a.task_id
JOIN user u ON a.user_id = u.user_id
WHERE c.comment_id=?;");
        $stmt->bind_param("i", $cid);
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
