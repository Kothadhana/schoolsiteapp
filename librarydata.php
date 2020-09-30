<?php
class Libbooks{
  public $name;
  public $vids=array();
  public $tbs=array();
  public function __construct($n){
    $this->name=$n;
  }
}
$ai=new Libbooks("Artificial Intelligence");
$ml=new Libbooks("Machine Learning");
$dbms=new Libbooks("Data Base Management System");
$dsa=new Libbooks("Data Structures and Algorithm");
$dm=new Libbooks("Descrete Mathematics");

$subjects=array($ai, $ml , $dbms , $dsa , $dm);


foreach ($subjects as $subject) {
   array_push($subject->vids, "https://www.youtube.com/");
   array_push($subject->tbs, "https://progate.com/");

}

?>
