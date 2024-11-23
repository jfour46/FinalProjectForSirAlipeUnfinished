<?php

   define("HOSTNAME", "sql207.infinityfree.com");
   define("USERNAME", "if0_37749541");
   define("PASSWORD", "5pzlQmVMmqtO1u7");
   define("DATABASE", "if0_37749541_mydb");

   $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

   if(!$connection){
    die("Connection Failed");
   }
   

?>