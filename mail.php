<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>email</title>
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
            #area{
                margin: auto;
                width: 100px;
                padding: 20px;

            }

        </style>
    </head>
    <body style="background-image: url('email.png'); background-repeat: no-repeat; background-position: center;">
        <div class="container" id="box">
            <form action="mailform.php" method="post">
                <div font-size:20px;margin:10px;color: white;>Send Email</div><br><br>
                <input id="text" type="text" name="name" placeholder="Full Name"><br><br>
               <input id= "text"type="email" name="mail" placeholder="Your Email"><br><br>
               <input id= "text"type="text" name="subject" placeholder="Subject"><br><br>
               <textarea id="area" name="message" placeholder="Message"></textarea><br><br>

                <input id="button" type="submit" value="SEND MAIL"><br><br> 

                
            </form>

        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="node_modules/bootstrap/js/bootstrap.bundle.js" ></script>
    </body>
</html>