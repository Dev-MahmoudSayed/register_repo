

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>  
        .error {color: #FF0001;}  
        </style>  
    <title>
    <?php
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode(".",$uri);
    $uri= explode("/",$uri[0]);
    echo $uri[4];  

    ?>

    </title>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Company Name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact</a>
        </li>
        
      </ul>

      <ul class="navbar-nav me-right mb-2 mb-lg-0">
        <?php  if(!isset( $_SESSION['user_name'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php elseif(isset( $_SESSION['user_name'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>