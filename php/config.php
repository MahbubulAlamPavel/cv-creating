<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","build_cv");
define("DB_TABLE","registration");

//database connection
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    die('Could not Connect My Sql:' .mysqli_error());
}