<?php
// $nbrTemplate = 20;
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
    <article>
    <p>
    <h4 class="text-primary">Templib</h4>Everything You Need to Get Creative Website personalised for your project,<br> we provide you more than <span class="h6 text-primary"><?php echo $nbrTemplate; ?></span> template free to download  and easy to customize at you own to make your website amazing. we have also a premium collection created by our moshup designer team 
    </p>
    </article>

        <h1>choose your template</h1>
        <button><a href="main.php?type=pro">Free templete</a></button><br>
        <button><a href="main.php?type=free">Pro templete</a></button>
    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>