<?php
    require_once("header.php");
    require_once("librarydata.php");

    if(isset($_POST["subject"]))
    {
      $ch=$_POST["subject"];
      $ch2=$_POST["type"];
      $link=$_POST["link"];
      if($ch2==1){
        array_push($subjects[$ch]->vids,$link);
      }
      elseif($ch2==2){
        array_push($subjects[$ch]->tbs,$link);
      }


    }
 ?>
 <div class="main-heading">
   <h2>RESOURCES</h2>
 </div>
    <?php
         foreach ($subjects as $sub) {
           echo "<div class='main-heading '><h2 class='text-align-center'>".$sub->name."</h2></div>";
           echo "<div class='mw-650 text-align-center'><h4>Videos</h4>";
           foreach($sub->vids as $vid){
             echo "<p class=''><a href='".$vid."'>".$vid."</a></p>";
           }
           echo "<h4>Text Books</h4>";
           foreach($sub->tbs as $tb){
             echo "<p class=''><a href='".$tb."'>".$tb."</a></p>";
           }
           echo "</div>";
         }

     ?>
<?php
  require_once("footer.php");
 ?>
