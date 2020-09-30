<?php
   require_once("header.php");
    require_once("timetabledata.php");

       if(isset($_POST["11"])){
         $monday->editDay($_POST["11"],$_POST['12'],$_POST['13'],$_POST['14'],$_POST['15']);
         $tuesday->editDay($_POST["21"],$_POST['22'],$_POST['23'],$_POST['24'],$_POST['25']);
         $wednesday->editDay($_POST["31"],$_POST['32'],$_POST['33'],$_POST['34'],$_POST['35']);
         $thursday->editDay($_POST["41"],$_POST['42'],$_POST['43'],$_POST['44'],$_POST['45']);
         $friday->editDay($_POST["51"],$_POST['52'],$_POST['53'],$_POST['54'],$_POST['55']);
         $saturday->editDay($_POST["61"],$_POST['62'],$_POST['63'],$_POST['64'],$_POST['65']);
       }

 ?>


    <div class="text-align-center">
      <div class="main-heading">
           <h2>TIME TABLE</h2>
      </div>

      <table class="text-align-center">
        <thead class="make-bold">
          <td></td>
          <td>9:00AM-10:00AM</td>
          <td>10:00AM-11:00AM</td>
          <td>11:00AM-12:00AM</td>
          <td>1:00PM-2:00PM</td>
          <td>2:00PM-3:00PM</td>
        </thead>
        <tr>
          <td class="make-bold">Monday</td>
          <td><?php echo $monday->first ?></td>
          <td><?php echo $monday->second ?></td>
          <td><?php echo $monday->third ?></td>
          <td><?php echo $monday->fourth ?></td>
          <td><?php echo $monday->fifth ?></td>
        </tr>
        <tr>
          <td class="make-bold">Tuesday</td>
          <td><?php echo $tuesday->first ?></td>
          <td><?php echo $tuesday->second ?></td>
          <td><?php echo $tuesday->third ?></td>
          <td><?php echo $tuesday->fourth ?></td>
          <td><?php echo $tuesday->fifth ?></td>
        </tr>
        <tr>
          <td class="make-bold">Wednesday</td>
          <td><?php echo $wednesday->first ?></td>
          <td><?php echo $wednesday->second ?></td>
          <td><?php echo $wednesday->third ?></td>
          <td><?php echo $wednesday->fourth ?></td>
          <td><?php echo $wednesday->fifth ?></td>
        </tr>
        <tr>
          <td class="make-bold">Thursday</td>
          <td><?php echo $thursday->first ?></td>
          <td><?php echo $thursday->second ?></td>
          <td><?php echo $thursday->third ?></td>
          <td><?php echo $thursday->fourth ?></td>
          <td><?php echo $thursday->fifth ?></td>
        </tr>
        <tr>
          <td class="make-bold">Friday</td>
          <td><?php echo $friday->first ?></td>
          <td><?php echo $friday->second ?></td>
          <td><?php echo $friday->third ?></td>
          <td><?php echo $friday->fourth ?></td>
          <td><?php echo $friday->fifth ?></td>
        </tr>
        <tr>
          <td class="make-bold">Saturday</td>
          <td><?php echo $saturday->first ?></td>
          <td><?php echo $saturday->second ?></td>
          <td><?php echo $saturday->third ?></td>
          <td><?php echo $saturday->fourth ?></td>
          <td><?php echo $saturday->fifth ?></td>
        </tr>
      </table>
      <br><br>

    </div>
<?php
   require_once("footer.php");
 ?>
