<h1>Tasks</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($task = $tasks->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $task['task_id']; ?></td>
    <td><?php echo $task['title']; ?></td>
    <td><?php echo $task['status']; ?></td>
    <td><a href="tasks-with-comments.php?id=<?php echo $task['task_id']; ?>">Comments</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
