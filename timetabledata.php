<?php
    require_once("data.php");

    $monday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");
    $tuesday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");
    $wednesday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");
    $thursday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");
    $friday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");
    $saturday= new Day("AI", "ML" , "DSA" ,"PHP", "HTML");

    $days=array($monday , $tuesday , $wednesday , $thursday , $friday , $saturday);
    $dayNames=array("Monday","Tuesday","Wednesday","Thursday", "Friday", "Saturday");
    $periods=array("first", "second" ,"third" , "fourth" , "fifth");
 ?>
