<?php
session_start();
include('inc/validation.php');
$error =[];

if($_SERVER['REQUEST_METHOD'] == "POST"){
 foreach($_POST as $key => $value){
     $$key = trim(htmlspecialchars($value)); 
 }
//  echo $name; 
//  echo $email;
//  echo $phone;
//  echo $salary;
}
// name
$name = filter_var($name,FILTER_SANITIZE_STRING);
if(!reqVal($name)){
    $error[] ="please fill the name field";
   
}elseif( !minVal($name,4)){
    $error[] ="name must be greater than 4";
    
}elseif( !maxVal($name,20)){
    $error[] ="name must be smaller than 20";
    
}
// end validation name 


$email = filter_var($email,FILTER_SANITIZE_EMAIL);
if(!reqVal($email)){
 $error[] ="please fill the email field";
 
}elseif(!emailVal($email)){
    $error[] = "please type correct email";
   

}

if(!reqVal($phone)){
    $error[] ="please fill the phone field";
    
}elseif(!numericVal($phone) ){
    $error[] ="fill phone number";
    
}
  




if(!reqVal($salary)){
    $error[] ="please fill the salary field";
    
}elseif(!numericVal($salary)){
    $error[] =" must be numeric";
    
}


$_SESSION['errors']= $error;

header("location:emp.php");








