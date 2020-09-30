<?php

class Day{
  public $first;
  public $second;
  public $third;
  public $fourth;
  public $fifth;
  public function __construct($first,$second,$third,$fourth, $fifth)
  {
    $this->first=$first;
    $this->second=$second;
    $this->third=$third;
    $this->fourth=$fourth;
    $this->fifth=$fifth;
  }
  public function editDay($first,$second,$third,$fourth, $fifth)
  {
    $this->first=$first;
    $this->second=$second;
    $this->third=$third;
    $this->fourth=$fourth;
    $this->fifth=$fifth;
  }
  public function editPeriod($period,$class){
    if($period==1)
      $this->first=$class;
    elseif($period==2)
      $this->second=$class;
    elseif($period==3)
      $this->third=$class;
    elseif($period==4)
      $this->fourth=$class;
    else
      $this->fifth=$class;
  }
}

 ?>
