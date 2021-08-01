<?php
    define('DBSERVER','localhost');
    define('DBUSERNAME','root');
    define('DBPASSWORD','');
    define('DBNAME','perfume');

    $con= mysqli_connect(DBSERVER,DBUSERNAME, DBPASSWORD,DBNAME);
     
    if($con==false)
    {
        die("Error: connection error.".mysqli_connect_error());
    }




?>