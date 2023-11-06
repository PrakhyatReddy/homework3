<?php
function selectComments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT comment_id, task_id, comment_txt FROM `Comments`");
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
