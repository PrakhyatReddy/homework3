<h1>Comments</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Task</th>
        <th>Commment</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($comment = $comments->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $comment['comment_id']; ?></td>
    <td><?php echo $comment['title']; ?></td>
    <td><?php echo $comment['comment_txt']; ?></td>
    <td>
      <form method ="post" action="comments-by-user.php">
        <input type="hidden" name="cid" vaLue="<?php echo $comment['comment_id']; ?>">
          <button type="submit" class="btn btn-primary">Users</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
