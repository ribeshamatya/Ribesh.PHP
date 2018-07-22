<?php

$ribeshemail= "9818260207";
$ribeshpassword= "idunno345";

$email = $_POST["email"];
$password = $_POST["password"];
  
switch ($email)
{  
    case $ribeshemail;

    if($password==$ribeshpassword)
    {
       echo " Welcome  back Reebesh Amatya ";
    }
    else
    {
      echo   " InvalidPassword ";
    }
    break;
}




?>