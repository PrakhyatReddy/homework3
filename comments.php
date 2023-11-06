<?php
require_once("util-db.php");
require_once("model-comments.php");
  
$pageTitle ="Comments";
include "view-header.php";
$comments = selectComments(); 
include "view-comments.php";
include "view-footer.php";
?>
