<?php
$n1=$_POST["medicine1"];
$n2=$_POST["medicine2"];
$n3=$_POST["medicine3"];
$n4=$_POST["medicine4"];
$n5=$_POST["medicine5"];
$n6=$_POST["medicine6"];
$quantity1=$quantity2=$quantity3=$quantity4=$quantity5=$quantity6="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $quantity1=test_input($_POST["quantity1"]);
   $quantity2=test_input($_POST["quantity2"]);
   $quantity3=test_input($_POST["quantity3"]);
   $quantity4=test_input($_POST["quantity4"]);
   $quantity5=test_input($_POST["quantity5"]);
   $quantity6=test_input($_POST["quantity6"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function filtername1($n1)
{ 
    if(filter_var($n1,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n1=="paracetomol" ||
	$n1=="aspirin" || $n1==" ibuprofen" || $n1==" naproxen" ||$n1==" omeprazole" || $n1=="xyz"))
    {
        echo "$n1";
    }
    else if($n1=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}
function filtername2($n2)
{
    
    if(filter_var($n2,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n2=="paracetomol" ||
	$n2=="aspirin" || $n2==" ibuprofen" || $n2==" naproxen" ||$n2==" omeprazole" || $n2=="xyz"|| $n2=="nil" ))
    {
        echo "$n2";
    }
    else if($n2=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}
function filtername3($n3)
{
    
    if(filter_var($n3,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n3=="paracetomol" ||
	$n3=="aspirin" || $n3==" ibuprofen" || $n3==" naproxen" ||$n3==" omeprazole" || $n3=="xyz"||$n3=="nil" ))
    {
        echo "$n3";
    }
    else if($n3=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}
function filtername4($n4)
{
    
    if(filter_var($n4,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n4=="paracetomol" ||
	$n4=="aspirin" || $n4==" ibuprofen" || $n4==" naproxen" ||$n4==" omeprazole" || $n4=="xyz" || $n4=="nil"))
    {
        echo "$n4";
    }
    else if($n4=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}
function filtername5($n5)
{
    
    if(filter_var($n5,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n5=="paracetomol" ||
	$n5=="aspirin" || $n5==" ibuprofen" || $n5==" naproxen" ||$n5==" omeprazole" || $n5=="xyz" || $n5=="nil" ))
    {
        echo "$n5";
    }
    else if($n5=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}
function filtername6($n6)
{
    
    if(filter_var($n6,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))) and( $n6=="paracetomol" ||
	$n6=="aspirin" || $n6==" ibuprofen" || $n6==" naproxen" ||$n6==" omeprazole" || $n6=="xyz" || $n6=="nil"))
    {
        echo "$n6";
    }
    else if($n6=="")
    {
       echo "nil";
    }
    else
    {
        echo " WARNING :: enter correct name !!";
    }
}

$today= date("m:i");
echo "<br>";
echo "<h2>Information Entered:<h2>";
echo "<br>";
echo "Medicine 1: ";
filtername1($n1);
echo "<br>";
echo "Quantity 1: ";
echo $quantity1;
echo "<br>";
echo "<br>";
echo "Medicine 2: ";
filtername2($n2);
echo "<br>";
echo "Quantity 2: ";
echo $quantity2;
echo "<br>";
echo "<br>";
echo "Medicine 3: ";
filtername3($n3);
echo "<br>";
echo "Quantity 3: ";
echo $quantity3;
echo "<br>";
echo "<br>";
echo "Medicine 4: ";
filtername4($n4);
echo "<br>";
echo "Quantity 4: ";
echo $quantity4;
echo "<br>";
echo "<br>";
echo "Medicine 5: ";
filtername5($n5);
echo "<br>";
echo "Quantity 5: ";
echo $quantity5;
echo "<br>";
echo "<br>";
echo "Medicine 6: ";
filtername6($n6);
echo "<br>";
echo "Quantity 6: ";
echo $quantity6;
echo "<br>";
echo "<br>";

?>


