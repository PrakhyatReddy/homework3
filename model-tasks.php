<?php
function selectTasks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select a.account_id, account_name, o.active, ifnull((select count(account_user_id) from account_user where account_id=a.account_id),0) as users 
            from account a join account_owner o on o.account_id=a.account_id where owner_email=? order by account_name");
        $stmt->bind_param("s", $uEmail);
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
