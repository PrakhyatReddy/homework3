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
while ($taskswithcomments = $comments->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $taskswithcomments['task_id']; ?></td>
    <td><?php echo $taskswithcomments['title']; ?></td>
    <td><?php echo $taskswithcomments['comment_txt']; ?></td>
    <td><?php echo $taskswithcomments['user_name']; ?></td>
    <td><?php echo $taskswithcomments['user_email']; ?></td>
    <td><?php echo $taskswithcomments['user_id']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
