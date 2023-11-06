<?php
function selectTasks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT task_id, title, status FROM `Tasks`");
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
