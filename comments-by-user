<?php
require_once("util-db.php");
require_once("model-comments-by-user.php");
  
$pageTitle ="Comments by User";
include "view-header.php";
$commentbyuser = selectCommentsByUser($_POST['cid']); 
include "view-comments-by-user.php";
include "view-footer.php";
?>
