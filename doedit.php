<?php
    require_once("header.php");
    require_once("admindata.php");
    if(isset($_POST["pin"]) && $_POST["uname"]){
      if($_POST["uname"]==$username && $_POST['pin']==$password)
      {
        echo '<div class="mw-650 text-align-center">

          <form class="" action="editlibrary.php" method="post">
          <div class="main-heading">
              <h3>Add videos or links to resources</h3>
          </div>
            <button type="submit" class="btn btn-primary btn-special" name="button">EDIT</button>
          </form>
          <form class="" action="editTimeTable.php" method="post">
          <div class="main-heading">
              <h3>Update timetable</h3>
          </div>

            <button type="submit" class="btn btn-primary btn-special" name="button">EDIT</button>
          </form>
          <form class="" action="editnoticeboard.php" method="post">
          <div class="main-heading">
              <h3>Add to noticeboard?</h3>
          </div>

            <button type="submit" class="btn btn-primary btn-special"  name="button">EDIT</button>
          </form>
        </div>';
      }
      else{
        echo "<h3>Invalid Credentials</h3>";
      }
    }
    else{
      echo "<h3>Login to edit</h3>";
    }




     require_once("footer.php");
  ?>
