<?php

    $id=$_GET['id'];
    $page=$_GET['page'];
    if(isset($_COOKIE['cart']))
    {
       $x=$_COOKIE['cart'].",".$id; 
       setcookie("cart",$x,time()+60*60*24*30);
    }
    else
    {
        setcookie("cart",$id,time()+60*60*24*30);
        echo "Abhi";
    }

    header("Location:$page.php?pid=$id");
?>

