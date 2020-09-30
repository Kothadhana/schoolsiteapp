<?php
    require_once("header.php");
    require_once("librarydata.php");
 ?>

 <div class="main-heading">
   <h2>UPDATE RESOURCES </h2>
 </div>
     <form class="form mw-650" action="library.php" method="post">
       <div class="form-group">
         <label for="subject">Select subject:</label>
         <select class="form-control" name="subject" placeholder="---Select Subject---">
           <option value="0">Artificial Intelligence</option>
           <option value="1">Machine Learning</option>
           <option value="2">DBMS</option>
           <option value="3">Data Structures and Algorithms</option>
           <option value="4">Descrete Mathematics</option>
         </select>
       </div>

       <div class="form-group">
         <label for="type">Video/ TextBook?</label>
         <select class="form-control" name="type" placeholder="--video/TextBook--">
           <option value="1">Video</option>
           <option value="2">Text Book</option>
         </select>
       </div>

       <div class="form-group">
         <label for="link">Enter Link:</label>
         <input type="text" class="form-control" name="link" value="">
       </div>
   <div class="text-align-center">
     <button type="submit" name="button" class="btn btn-color2">ADD</button>

   </div>
     </form>
<?php
   require_once("footer.php");
 ?>
