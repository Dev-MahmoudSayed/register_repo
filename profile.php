<?php
session_start();
include('inc/header.php');  ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1 class="border text-center p-4">Profile Page</h1>
                <div class="container-fluid">
                       <div class="row">
          <?php if(isset($_SESSION['user_name'])): ?>
                          <div class="col">
                              <div class="card" style="width: 18rem;">
                                     
                                <div class="card-body">
                                        
                                <li class="list-group list-group-item">
                                    <?php echo $_SESSION['user_name']; ?>
                                 </li>
                                        

                                <li class="list-group-item">
                                    
                                <?php echo $_SESSION['user_email']; ?> 
                                </li>
                                        
                                </ul>
                                
                                </div>
                              </div>
                          </div>
          <?php endif; ?>
                       </div>

                   </div>

            
            </div>
            

        </div>
    </div>


<?php include('inc/footer.php'); ?>