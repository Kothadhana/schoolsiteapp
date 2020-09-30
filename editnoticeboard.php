<?php
    require_once("nbdata.php");
    require_once("header.php")
 ?>
 <div class="main-heading">
   <h2>UPDATE NOTICE BOARD</h2>
 </div>
    <form class="form mw-650" action="index.php" method="post">
      <div class="form-group">
        <label for="item">Description:</label>
        <textarea name="item" rows="8" cols="80" class="form-control"></textarea>
      </div>
<div class="text-align-center">
  <button type="submit" name="button" class="btn btn-color2">Add item</button>

</div>
    </form>
<?php
  require_once("footer.php");
 ?>
