<?php
        
        session_start();

           $_SESSION;
            
         
        include "connection.php";
        include "functions.php";
        include "head2.php";

$user_data = check_login($con);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh">
        <title>my login site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
      
    </head >

    <body style="background-image: url('back1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    .<div class="container">
        

        
        
    <img src="profile.jpg" height="200",width="200" style="float:left;padding:20px"/>
        <p>
            <h3 style="padding: 20px; float:center;" ><strong><u>My name is Winslause Busale shioso</u></strong></h3><br>
            "I may not believe in redemption, but what <br> i believe in is right or wrong, truth or false"<br>
            <br>
            Everyone has a greater purpose on this earth.<br>It doesnt matter what you do, what matters<br>
             is how you do it.<br>
            Forcusing on the good side of you actually<br> creates more good.




        </p>
        
   
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
        <footer>
        Hello <?php echo $user_data["user_name"] ?> <br>
        <i style="font-family: algerian; color: green;" >Welcome to my page</i>


        </footer>
        <br>
        
        <script src="node_modules/bootstrap/js/bootstrap.bundle.js" ></script>
        </div>
    </body>
</html>