<?php
$n=$_POST["fname"];
$l=$_POST["lname"];
$address=$consultant=$phone=$quantity=$medicine=$card="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $phone= test_input($_POST["phone"]);
    $address= test_input($_POST["address"]);
    $medicine= test_input($_POST["medicine"]);
    $consultant= test_input($_POST["consultant"]);
    $quantity= test_input($_POST["quantity"]);
    $card=test_input($_POST["card"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function filtername($n)
{
    
    if(filter_var($n,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
    {
        echo "$n";
    }
    else
    {
        echo " WARNING :: enter only alphabetical data !!";
    }
}
function filterlname($l)
{
    
    if(filter_var($l,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
    {
        echo "$l";
    }
    else
    {
        echo " WARNING :: enter only alphabetical data !!";
    }
}

$today= date("m:i");
echo "<br>";
echo "<h2>Information Entered:<h2>";
echo "<br>";
echo "First Name: ";
filtername($n);
echo "<br>";
echo "Last Name: ";
filterlname($l);
echo "<br>";
echo"Phone no: ";
echo $phone;
echo "<br>";
echo "address: ";
echo $address;
echo "<br>";
echo "Medicine: ";
echo $medicine;
echo "<br>";
echo "Quantity: ";
echo $quantity;
echo "<br>";
