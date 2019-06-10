<?php
include "AraayList2.php";

$arrayList = new AraayList2();
$arrayList->add(10);
$arrayList->add(20);
$arrayList->add(30);
$arrayList->add(40);
echo $arrayList->get(8);
echo "<br>";
$arrayList->remove(1);
echo "<br>";
print_r($arrayList);