
<?php
session_start();
?>
<?php include('inc/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
            <?php
            if(isset($_SESSION['errors'])):
             foreach($_SESSION['errors'] as $val ):?>
             <div class="alert alert-danger text-center">
             <?php echo $val; ?>
             </div>
             <?php endforeach;
                   endif;
             ?>
                <form action="register_handel.php" method="POST" class="border p-4 my-2 bg-info">
                    <h1 class="p-4 text-center"> Register </h1>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <?php if(isset($_SESSION['errors2']['name'])):  ?>
                            <div class="alert alert-danger text-center">
                            <?php echo $_SESSION['errors2']['name']; ?>
                            </div>
                        <?php endif; ?>
                        
                        
                        
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <?php if(isset($_SESSION['errors2']['email'])):  ?>
                            <div class="alert alert-danger text-center">
                            <?php echo $_SESSION['errors2']['email']; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <?php if(isset($_SESSION['errors2']['password'])):  ?>
                            <div class="alert alert-danger text-center">
                            <?php echo $_SESSION['errors2']['password']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="New Member">
                    </div>

                </form>
            </div>
        </div>
    </div>


<?php include('inc/footer.php'); ?>

<?php

unset($_SESSION['errors']);
?>