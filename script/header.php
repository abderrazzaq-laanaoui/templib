<?php 

      if(!isset($_SESSION)) 
      { 
          session_start(); 
      } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font: Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,500,700,900" rel="stylesheet">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style/main.css">
    <title>templib</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <!-- navbar-fixed fixed-top-->
            <a class="navbar-brand h1" href="index.php">
                <img id="logo" src="images/logo.png" width="100px" alt="logo">
                <!-- <span id="brand">templib</span> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto justify-content-center">

                    <li class="nav-item ">
                        <a class="nav-link item <?php echo $ac_free;?>" href="main.php?type=free">Free template</a>
                    </li>
                    <li class="nav-item item <?php echo $ac_home; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link item  <?php echo $ac_pro; ?>" href="main.php?type=pro">Premium template</a>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION['uid'])){
                    echo '<a class="sibtn nav-link btn btn-warning" href="script/logout.php">logout</a>';
                }
                else{
                    echo '<a class="sibtn nav-link btn btn-primary" href="login.php">login</a>';
                }
                ?>
            </div>
        </nav>
    </header>