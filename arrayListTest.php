<?php
include "ArrayList.php";


$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(9);
$listInteger->add(8);
$listInteger->add(6);

echo $listInteger->get(1);
echo "<br>";
print_r($listInteger);