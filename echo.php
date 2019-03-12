<?php
    $zip = trim($_POST['zip']); 
    $post = $_POST['address']; 
    if(strlen($zip) < 1){
        print "zip is short...";
    } else {
        echo $zip;
        echo $post;
    }
?>