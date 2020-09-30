<?php
    require_once("header.php");
   include_once('nbdata.php');

   if(isset($_POST['item'])){
                   array_push($items,$_POST['item']);
                 }
 ?>


    <div class="">
      <div class="main-heading">
        <h2>NOTICE BOARD</h2>
      </div>
      <div class="mw-650">
        <ul>
          <?php
              for($i=0;$i<count($items);$i++)
              {
                echo '<li>'.$items[$i].'</li>';
              }
           ?>
        </ul>
      </div>

    </div>

  <?php
     require_once("footer.php");
   ?>
