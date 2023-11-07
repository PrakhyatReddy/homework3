<?php
require_once("util-db.php");
require_once("model-comments.php");
  
$pageTitle ="Comments";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      if(insertComments($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert"> Comment Added </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;

        case "Edit":
      if(updateComments($_POST['cid'], $_POST['cDesc'], $_POST['cNumber'])){
        echo '<div class="alert alert-success" role="alert"> Comment Edited </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;

        case "Delete":
      if(deleteComments($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert"> Comment Deleted </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
  }
}

$comments = selectComments(); 
include "view-comments.php";
include "view-footer.php";
?>
