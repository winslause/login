<html>
    <head>
<style>
    #nav {
        position: absolute;
        left: 0px;
        height: 40px;
        background-color: #2c64B4;
        width: 1500px;
        margin: 0 auto;
    }
    #nav ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
    }
    #nav ul li{
        margin: 0;
        padding: 0;
        float: left;
    }
    #nav ul li a{
        text-decoration: none;
        padding: 10px 20px;
        display: block;
        color: #fff;
        text-align: center;
    }
    .topnav a{
        float: left;
        display: block;
        color: #158ac0;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;

    }
    .topnav a:hover{
        background-color: #ddd;
        color: black;
    }
    .topnav a.active{
        background-color: #04AA6D;
        color: white;
    }
    .topnav .icon{
        display: none;
    }
    @media screen and(max-width: 600px) {
        .topnav a:not(:first-child){display: none;}
        .topnav a.icon{
            float: right;
            display: block;
        }
        
    }
    @media screen and(max-width: 600px) {
        .topnav.responsive a {
            position: relative;
        }
        .topnav.responsive a.icon{
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

    }
</style>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<header>
    <div class="topnav" id="myTopnav">
            <a href="signup.php" class="active">Home</a>
             <a href="about.php">About</a>
            <a href="contacts.php">Contacts</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        

        </nav>
    </header>

<br>
<body>

<script>
    function myFunction(){
        var x = document.getElementById(myTopnav);
        if (x.className === "topnav"){
            x.className += "responsive";

        }else{
            x.className = "topnav";
        }
    }
</script>
<script src="node_modules/bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>