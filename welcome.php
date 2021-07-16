<?php
    session_start();
     if(!isset($_SESSION['loggedin']) or ($_SESSION['loggedin']==false))
     {
         header('location: index.php');
         exit;
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>
    <h1 class="h1"><img src="tintin3.jpg" alt="Tintin" width="150px" height="120px">Welcome To Tintin's World!<img src="tintin2.jpg" alt="Tintin" width="200px" height="120px"></h1>
    <video class="vid" src="tintinvideo.mp4" loop autoplay="true"></video><br>
    <img class="image1" src="tintin1.jpg" alt="tintin"><br>
    <p class="quote"><br><i>“Hooray! Hooray! The end of the world has been postponed!”</i></p>
    <style>
        *
        {
            box-sizing: border-box;
        }
        .vid{
            width: 60%;
            height: 80%;
            float: left;
        }
        .h1
        {
            text-align: center;
            font-size: 50px;
        }
        .image1
        {
            float: right;
            width: 40%;
            height: 110%;
            margin-top: 1.5%;
        }
        p.quote
        {
            
            color: black;
            font-size: 40px;

        }
        body
        {
            background-color: yellow;
        }
        div.heading
        {
            background-color: yellow;
            color: black;
            text-align:start;
        }
        .btn
        {
            background-color: rgb(243, 12, 12);
            color: rgb(0, 0, 0);
            width: 100px;
            height: 68px;
            font-family:'Times New Roman', Times, serif
            margin-top: 0%;
            margin-left: 43%;
        }
        .btn:hover
        {
            background-color: blue;
            width: 110px;
            height: 72px;
        }
        footer.f1
        {
            font-size: larger;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .divfooter
        {
            background-color: rgba(255, 60, 0, 0.26);
            color: rgb(0, 0, 0);
        }
        .f1
        {
            padding-left: 1%;
        }
    </style>
    <button class='btn' onclick='out()'><b>LOGOUT</b></button>
    <script>
        function out()
        {
            <?php $_SESSION['loggedin']=false; ?>
            window.location = "index.php"; 
        }
    </script>
    <div class="divfooter">
    <hr class="solid">
    <footer class="f1">
       <b><h4>All rights are reserved © SRIJA</h4></b>
        Connect With Me : <br><br>
        <a href="https://www.linkedin.com/in/srija-talukdar-8608261b0/"><img id="account" src="linkedin.jpg" height="40px" width="40px" alt="Linkedin Profile of Srija"></a>
        <a href="https://github.com/Srija17"><img id="account" src="github.jpg" height="40px" width="40px" alt="Github Profile of Srija" ></a>
        <a href="https://www.instagram.com/srijatalukdar_/"><img id="account" src="instagram.jpg" height="43px" width="45px" alt="Instagram Profile of Srija" ></a>
        <a href="https://www.facebook.com/srija.talukdar.98"><img id="account" src="facebook.jpg" height="40px" width="40px" alt="Facebook Profile of Srija" ></a>    
    </footer>
    </div>
</body>
</html>