<h1>Tasks with Comments</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Task</th>
        <th>Commment</th> 
        <th>Name</th>
        <th>Email</th>
        <th>UserID</th> 
      </tr>
    </thead>
    <tbody>
<?php
while ($comment = $comments->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $comment['task_id']; ?></td>
    <td><?php echo $comment['title']; ?></td>
    <td><?php echo $comment['comment_txt']; ?></td>
    <td><?php echo $comment['user_name']; ?></td>
    <td><?php echo $comment['user_email']; ?></td>
    <td><?php echo $comment['user_id']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
