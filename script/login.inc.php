<?php 

    if ( isset($_POST['login-submit']) )
    {
        require_once 'db.php';
        $user_mail = $_POST['user'];
        $pwd = $_POST['pwd']; 

        if (empty($user_mail) || empty($pwd)) {
            header("Location:../login.php?err=emptyfield&user=".$user_mail);
            exit();
        }
        else {
            $sql = "SELECT * FROM users WHERE user= ? OR mail= ?";
            $stmt = mysqli_stmt_init($db);
            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                header("Location:../login.php?err=sqlerreur");
                exit();
            }
            else 
            {
                mysqli_stmt_bind_param($stmt,"ss", $user_mail, $user_mail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($pwd,$row['pwd']);
                    if(!$pwdCheck ){
                        header("Location:../login.php?err=wrongpwd");
                        exit();
                    }
                    elseif($pwdCheck ==true){
                        session_start();
                        $_SESSION['uid'] = $row['uid'];
                        $_SESSION['user'] = $row['user'];
                        if(isset($_SESSION["source"]))
                        {
                             $path = $_SESSION["originatingpage"];
                             unset($_SESSION["originatingpage"]);
                             header('Location:../'.$pah);
                             header("Location:../main.php?type=pro");
                            exit();
                        } else{
                            
                            header("Location:../index.php");
                            exit();
                        }
                    }
                }
                else {
                    header("Location:../login.php?err=notfound");
                    exit();
                }
            }

        
    }
}else
{
    header("Location:../login.php");
    exit();
}

?>