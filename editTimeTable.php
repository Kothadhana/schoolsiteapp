<?php
    require_once("header.php");
    require_once("timetabledata.php");
 ?>


    <div class="text-align-center">
      <div class="main-heading">
           <h2>UPDATE TIME TABLE</h2>
      </div>
      <div class="text-align-center">
        <form class="text-align-center" action="timetable.php" method="post">
         <table>
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
          <td><input type="text" name="11" value="<?php echo $monday->first ?>"></td>
          <td><input type="text" name="12" value="<?php echo $monday->second ?>"></td>
          <td><input type="text" name="13" value="<?php echo $monday->third ?>"> </td>
          <td><input type="text" name="14" value="<?php echo $monday->fourth ?>"> </td>
          <td><input type="text" name="15" value="<?php echo $monday->fifth ?>"> </td>
        </tr>
        <tr>
          <td class="make-bold">Tuesday</td>
          <td><input type="text" name="21" value="<?php echo $tuesday->first ?>"> </td>
          <td><input type="text" name="22" value="<?php echo $tuesday->second ?>"> </td>
          <td><input type="text" name="23" value="<?php echo $tuesday->third ?>"> </td>
          <td><input type="text" name="24" value="<?php echo $tuesday->fourth ?>"> </td>
          <td><input type="text" name="25" value="<?php echo $tuesday->fifth ?>"> </td>
        </tr>
        <tr>
          <td class="make-bold">Wednesday</td>
          <td><input type="text" name="31" value="<?php echo $wednesday->first ?>"> </td>
          <td><input type="text" name="32" value="<?php echo $wednesday->second ?>"> </td>
          <td><input type="text" name="33" value="<?php echo $wednesday->third ?>"> </td>
          <td><input type="text" name="34" value="<?php echo $wednesday->fourth ?>"> </td>
          <td><input type="text" name="35" value="<?php echo $wednesday->fifth ?>"> </td>
        </tr>
        <tr>
          <td class="make-bold">Thursday</td>
          <td><input type="text" name="41" value="<?php echo $thursday->first ?>"> </td>
          <td><input type="text" name="42" value="<?php echo $thursday->second ?>"> </td>
          <td><input type="text" name="43" value="<?php echo $thursday->third ?>"> </td>
          <td><input type="text" name="44" value="<?php echo $thursday->fourth ?>"> </td>
          <td><input type="text" name="45" value="<?php echo $thursday->fifth ?>"> </td>
        </tr>
        <tr>
          <td class="make-bold">Friday</td>
          <td><input type="text" name="51" value="<?php echo $friday->first ?>"> </td>
          <td><input type="text" name="52" value="<?php echo $friday->second ?>"> </td>
          <td><input type="text" name="53" value="<?php echo $friday->third ?>"> </td>
          <td><input type="text" name="54" value="<?php echo $friday->fourth ?>"> </td>
          <td><input type="text" name="55" value="<?php echo $friday->fifth ?>"> </td>
        </tr>
        <tr>
          <td class="make-bold">Saturday</td>
          <td><input type="text" name="61" value="<?php echo $saturday->first ?>"> </td>
          <td><input type="text" name="62" value="<?php echo $saturday->second ?>"> </td>
          <td><input type="text" name="63" value="<?php echo $saturday->third ?>"> </td>
          <td><input type="text" name="64" value="<?php echo $saturday->fourth ?>"> </td>
          <td><input type="text" name="65" value="<?php echo $saturday->fifth ?>"> </td>
        </tr>
      </table>

         <button type="submit" name="button" class="btn btn-color2 ">Done</button>

        </form>

      </div>

    </div>
<?php
   require_once("footer.php");
 ?>
