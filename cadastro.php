<?php include "header.php"; ?>
<div class="container">
  <form action="insert.php" method="post">
    <div class="form-group">
        <p class="">
          <label class="form-control" for="char_id">Char ID:</label>
          <input class="form-control" type="text" name="char_id" id="char_id">
        </p>
        <p>
          <label class="form-control" for="ladder_id">Ladder ID:</label>
          <input class="form-control" type="text" name="ladder_id" id="ladder_id">
      </p>
      <input class="btn btn-primary" type="submit" value="Submit">
  </form>
</div>
</div>
<?php include "footer.php" ?>
