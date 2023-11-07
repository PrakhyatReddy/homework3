<?php
require_once("util-db.php");
require_once("model-comments.php");
  
$pageTitle ="Comments";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      insertComments($_Post['cTask'], $_Post['cDesc']);
      break;
  }
}

$comments = selectComments(); 
include "view-comments.php";
include "view-footer.php";
?>
