<?php

$qty=$_GET["quantity"];
  $item=$_GET["item"];
  $la=$_GET["la"];
  $price=0;
  // $a=array(quantity.item.la);
  if($item=="Mushroom Pizza"){
    $price=$qty*5;
    $la=$price*8;
  }else if($item=="Pizza Marinera"){
    $price=$qty*4.5;
    $la=$price*8;
  }else if($item=="Paneer Pizza"){
    $price=$qty*6;
    $la=$price*8;
  }
  // echo array_sum($a);
  echo("Thanks for ordering. Please pay ".$price+$la." at checkout");
?>