
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Signup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <style type="text/css">
            #text{
                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
                width:100%

            }
            #button{
                padding: 10px;
                width: 100px;
                color: white;
                background-color: lightblue;
                border: none;
            }
            #box{
                background-color: grey;
                margin: auto;
                width: 300px;
                padding: 20px;


            }

        </style>

    </head>
    <body style="background-image: url('back3.jpg'); background-repeat: no-repeat; background-position: center;">
        <div class="container" id="box">
            <form method="post">
                <div font-size:20px;margin:10px;color: white;>Signup</div><br><br>
                User Name<input id="text" type="text" name="user_name"><br><br>
               Password <input id= "text"type="password" name="password"><br><br>

                <input id="button" type="submit" value="Signup"><br><br>

                <a href="login.php">Click to Login</a>
            </form>

        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <?php
        session_start(); 

         
            include "connection.php";
            include "functions.php";

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //something was posted
              $user_name =  $_POST["user_name"];
                $password = $_POST["password"];

                if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

                    //save to database
                    $user_id = random_num(20);
                    $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
                    mysqli_query($con,$query);

                    header("location: login.php");
                    die;
                }
                else {
                    echo "please enter some valid information!";
                }
            }


        ?>
        <footer>
            I created this page for academic purposes as my first project.<br>
            It has simple elements, <br>if you find it interesting, just contact me for the purpose of exchanging ideas.
            I will also appreciate your corrections.<br>
            <h2 style="font-family: algerian;">Let's go</h2>
        </footer>
        <script src="node_modules/bootstrap/js/bootstrap.bundle.js" ></script>
    </body>
</html>