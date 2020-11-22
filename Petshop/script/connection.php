<?php

    $conn=mysqli_connect('localhost','root','','utsimk');

    if(!$conn)
    {
        die(' Please Check Your Connection'.mysqli_error($conn));
    }
?>