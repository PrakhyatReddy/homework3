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

function insertComments($cTask, $cDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Comments` (`task_id`, `comment_txt`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cTask, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateComments($cid, $cTask, $cDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Comments` set `task_id` =?, `comment_txt` =? where comment_id =?");
        $stmt->bind_param("iss", $cid, $cTask, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteComments($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Comments where comment_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
