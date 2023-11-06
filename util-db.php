<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'prakhyat_hw3user1', 'Jabroni@123', 'prakhyat_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
