<?php
function selectComments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT comment_id, title, comment_txt
FROM Tasks
JOIN Comments ON Tasks.task_id = Comments.task_id;");
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
