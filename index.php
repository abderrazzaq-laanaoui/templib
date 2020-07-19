<?php
// choose the active page
$ac_home="active";
$ac_free="";
$ac_pro="";
// import the header
require_once "script/header.php";

// calculate nbr of templates
require_once 'script/db.php';
$sql= "SELECT * FROM `template`";
$rqt = mysqli_query($db ,$sql);
$nbrTemplate = mysqli_num_rows($rqt)
?>

    <div class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000">
                    <img class="d-block w-100" src="images/Diapositive1.jpg" alt="First slide">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img class="d-block w-100" src="images/Diapositive2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img class="d-block w-100" src="images/Diapositive3.jpg" alt="Third slide">
                </div>
            </div>
            </a>
        </div>
    </div>
    <center>
    <p>
        <h4 class="text-primary">Templib</h4>Everything You Need to Get Creative Website personalised for your project,<br> we provide you more than <span class="h6 text-primary"><?php echo $nbrTemplate; ?></span> template free to download  and easy to customize at you own to make your website amazing. we have also a premium collection created by our moshup designer team 
    </p>
        <h1>choose your template</h1>
        <button><a href="main.php?type=pro">Free templete</a></button><br>
        <button><a href="main.php?type=free">Pro templete</a></button>
    </center>
     <footer class="fdb-block footer-small bg-dark">
        <div class="container">
        <div class="row" style="display: flex;justify-content: space-around ;">
            <img src="images/mushup.svg" alt="mushup logo" height="50px" width="50px" srcset=""> <p id="templated">tempated</p>
        </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <ul class="nav justify-content-center justify-content-md-start">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo $ac_free; ?>" href="main.php?type=free">Free Template</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo $ac_pro; ?>" href="main.php?type=pro">Premium template</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-center">
                   <a target="_blank" href="https://github.com/abderrazzaq-laanoui/">LAANOUI Abderrazzaq</a><br> Encadrent: Mr. Mohamed Benslimane<br> © 2020 All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>