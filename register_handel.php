<?php  


  session_start();





  
  
  include('inc/validation.php');
  $error =[];
  $_SESSION['errors2']=[];

  if($_SERVER['REQUEST_METHOD'] == "POST"){
   foreach($_POST as $key => $value){
       $$key = trim(htmlspecialchars($value)); 
   }
  
  }
  // name
 
  $name = filter_var($name,FILTER_SANITIZE_STRING);
  if( !reqVal($name)){
      $error[] ="please fill the name field";
      $_SESSION['errors2']['name']="please fill the name field";
     
  }elseif( !minVal($name,4)){
      $error[] ="name must be greater than 4";
      $_SESSION['errors2']['name']="name must be greater than 4";
  }elseif( !maxVal($name,20)){
      $error[] ="name must be smaller than 20";
      $_SESSION['errors2']['name']="name must be smaller than 20";
  }
  // end validation name 
  
  
  $email = filter_var($email,FILTER_SANITIZE_EMAIL);
  if(!reqVal($email)){
   $error[] ="please fill the email field";
   $_SESSION['errors2']['email']="please fill the email field";
  }elseif(!emailVal($email)){
      $error[] = "please type correct email";
      $_SESSION['errors2']['email']= "please type correct email";
     
  
  }
  $password = filter_var($password,FILTER_SANITIZE_STRING);
  if(!reqVal($password)){
      $error[] ="please fill the password field";
      $_SESSION['errors2']['password']="please fill the password field";
  }elseif( !minVal($password,4)){
      $error[] ="password must be greater than 4";
      $_SESSION['errors2']['password']="password must be greater than 4";
  }elseif( !maxVal($password,20)){
      $error[] ="password must be smaller than 20";
      $_SESSION['errors2']['password']="password must be smaller than 20";
      
  }
  
  
  
  
  $_SESSION['errors']= $error;
   
  $_SESSION['user_name']=$name;
  $_SESSION['user_email']=$email;

  if(!empty( $_SESSION['user_name'])){
      header("location:profile.php");
  }else{
    header("location:register.php");
  }
    


  
  





?>
