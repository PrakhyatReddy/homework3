<h1>Comments by User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Task</th> 
        <th>Comment</th>
        <th>Email</th>
        <th>Status</th> 
      </tr>
    </thead>
    <tbody>
<?php
    while ($commbyuser = $commentbyuser->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $commbyuser['user_id']; ?></td>
    <td><?php echo $commbyuser['title']; ?></td>
    <td><?php echo $commbyuser['comment_txt']; ?></td>
    <td><?php echo $commbyuser['user_name']; ?></td>
    <td><?php echo $commbyuser['user_email']; ?></td>
    <td><?php echo $commbyuser['status']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
