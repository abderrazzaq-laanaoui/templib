<?php

try{
    $db = mysqli_connect('localhost','root','','project');
} catch(Exception $e)
{
    die('ERROR:'.$e->getMessage());
}
?>