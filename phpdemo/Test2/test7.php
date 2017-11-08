<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 14:05
 */
function writeName()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();
echo"<br/>";

function writeName2($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName2("Kai Jim");
echo "My sister's name is ";
writeName2("Hege");
echo "My brother's name is ";
writeName2("Stale");

function writeName3($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName3("Kai Jim",".");
echo "My sister's name is ";
writeName3("Hege","!");
echo "My brother's name is ";
writeName3("Ståle","?");

function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);