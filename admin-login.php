<?php
   require_once("header.php");

 ?>
<div class="mw-500">
  <form class="" action="doedit.php" method="post">
    <div class="main-heading">
         <h2>ADMIN LOGIN</h2>
    </div>
        <div class="form-group">
      <label for="uname">UserName:</label>
      <input type="text" class="form-control" name="uname" value="" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="pin">Password:</label>
      <input type="password" class="form-control" name="pin" value="" placeholder="Password">
    </div>
    <div class="text-align-center">
        <button type="submit" name="button" class="btn btn-primary form-control">LogIn</button>
    </div>

  </form>
</div>
 <?php
   require_once("footer.php");
  ?>
