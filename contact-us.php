
<?php
session_start();
?>
<?php 

include('inc/header.php'); 

?>

<?php  
include('inc/validation.php');
 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $nameErr ='';
    $emailErr = '';
    $msgErr = ''; 
// validation name 
    $name = filter_var($name,FILTER_SANITIZE_STRING);
    if(!reqVal($name)){
        $nameErr ="please fill the name field";
       
    }elseif( !minVal($name,4)){
        $nameErr ="name must be greater than 4";
        
    }elseif( !maxVal($name,20)){
        $nameErr ="name must be smaller than 20";
        
    }
    // end validation name 
    
    // email validation
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    if(!reqVal($email)){
     $emailErr ="please fill the email field";
     
    }elseif(!emailVal($email)){
        $emailErr = "please type correct email";
       
    
    }
    // end email validation
    // message validation
    $msg = filter_var($msg,FILTER_SANITIZE_STRING);
    if(!reqVal($msg)){
        $msgErr ="please fill the name field";
       
    }elseif( !minVal($msg,4)){
        $msgErr ="name must be greater than 4";
        
    }elseif( !maxVal($msg,500)){
        $msgErr ="name must be smaller than 500";
        
    }
    
    // end message validation


   }





     
 

?>


    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
           
           
            
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" class="border p-4 my-2 bg-primary">
                    <h1 class="p-4 text-center"> Contact Us </h1>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                       <?php
                         if(isset($nameErr) && !empty($nameErr)): ?>
                          <div class="alert alert-danger text-center">
                         <?php     echo $nameErr; ?>
                         <?php endif; ?> 
                         
                    
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <?php
                         if(isset($emailErr) && !empty($emailErr)){ ?>
                          <div class="alert alert-danger text-center">
                         <?php     echo $emailErr; ?>
                          </div>
                         <?php } ?>
                         
                      
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                        <?php
                         if(isset($msgErr) && !empty($msgErr)): ?>
                          <div class="alert alert-danger text-center">
                         <?php     echo $msgErr; ?>
                         <?php endif; ?> 
     
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" class="btn btn-info" value="Save">
                    </div>

                </form>
           
            </div>
        </div>
    </div>
<?php

if(isset($_POST['name'])){
    echo '<h2>'. $_POST['name'].'</h2>';
  }
  if(isset($_POST['email'])){
    echo '<h2>'. $_POST['email'].'</h2>';
  }
  if(isset($_POST['message'])){
    echo '<h2>'. $_POST['message'].'</h2>';
  }

?>  

<?php include('inc/footer.php'); ?>

