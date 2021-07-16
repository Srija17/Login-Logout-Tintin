<?php
    $con = mysqli_connect("localhost","root","","data_test");
    if($con==false)
    {
        die("Connection Failed".mysqli_connect_server());
    }
    echo '<script>console.log("Successfully Connected!")</script>';
?>