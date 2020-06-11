<?php 
    if(isset($_POST['signup-submit'])){
      require_once('db.php');

      $user = $_POST['user'];
      $mail = $_POST['mail'];
      $pwd = $_POST['pwd'];
      $repetePwd = $_POST['re-pwd'];

    if(empty($user) ||empty($mail) ||empty($pwd) ||empty($repetePwd)){
        header("Location:../signup.php?err=emptyfield&user=".$user."&mail=".$mail);
        exit();
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL ) && !preg_match("/^[a-zA-Z0-9]*$/",$user))
    {
        header("Location:../signup.php?err=invalidmailanduser");
        exit();
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location:../signup.php?err=invalidmail&user=".$user);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
        header("Location:../signup.php?err=invaliduser&mail=".$mail);
        exit();
    }
    elseif($pwd != $repetePwd){
        header("Location:../signup.php?err=pwdnotmatch&user=".$user."&mail=".$mail);
        exit();
    }
    else{
        $sql ="SELECT uid FROM users WHERE user=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location:../signup.php?err=sqlerreur1");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt,"s",$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck >0) {
                 header("Location:../signup.php?err=usertaken");
                exit();
            }
            else {
                $sql = "INSERT INTO users (user, mail, pwd) VALUES (?, ?, ?) ";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location:../signup.php?err=sqlerreur");
                    exit();
                }
                else{
                    $hachPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss",$user,$mail,$hachPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location:../signup.php?err:null");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db);

    }
    else{
        header("Location:../signup.php");
    }
?>