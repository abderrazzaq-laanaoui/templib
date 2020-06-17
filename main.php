<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   $cat = 0;
   $ac_free = 'active';
   $ac_pro = '';
   $ac_home='';
   if (isset($_GET["type"])) {
       if($_GET["type"]=='pro')
       {
           if(!isset($_SESSION['uid']) )
           {
            $_SESSION["source"] =$_SERVER["REQUEST_URI"];
            header('Location:login.php');
            exit();
           }
           else{
                $cat = 1;;
                $ac_free = '';
                $ac_pro = 'active'; 
           }
       }
   }
require_once "script/header.php";
?>
    <div id="cont" class="container-fluid d-flex justify-content-center flex-wrap dark">

    <?php 
    require "script/db.php";
    $sql= "SELECT * FROM `template` WHERE catégorie=$cat ";
    $rqt = mysqli_query($db ,$sql);
    $i=0;
    while($row = mysqli_fetch_assoc($rqt) and $i==0 )
    {
        $i=0;
       
        echo "<div class='box'>
                <div class='imgBox'>
                    <img src='$row[image]' alt='mockup>'>
                </div>
                <div class='content'>
                    <h2 id='title'>$row[name]</h2>
                            <p>$row[description]</p>          
                            <div class='btns'>
                                <a onclick='prvData(`$row[preview]`,`$row[download]`)' class='btn btn-dark darkbtn' href='./preview.html' target='_blank'> Preview </a>
                                <a download class='btn btn-light whitebtn' href='$row[download]'>Download</a>
                            </div>
                </div>
            </div>";
    }
    require "script/closedb.php"
    ?>
</div>
    <footer class="fdb-block footer-small bg-dark">
        <div class="container">
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
                    Laanoui ABDERRAZZAQ <br> Encadrent: bensliman<br> © 2020 All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <script src="script/setData.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
