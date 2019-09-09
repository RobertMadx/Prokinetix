<?php $uri = $_SERVER['REQUEST_URI'];?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProKinetix</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./css/styles.css?version=<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="description" content="ProKinetix Physiotherapy Limited">
    <meta name="keywords" content="ProKinetix,Physiotherapy,Palmerston">
    <meta name="author" content="Robert Madden">
    <link rel="icon" href="ProKinetix_logo_small.png">
</head>

<body>
    <header>
        <div class="bookdiv">
            <div class="container bookline">
                <a class="booklink" href="https://my.powerdiary.com/clientportal/eb6c1914-4f2a-43c9-bba3-7380bdd67ab9">BOOK ONLINE</a> | Ph: 022 069 3460
            </div>
        </div>
        <nav class="navbar navbar-default <?php if ($uri === "/"){echo 'navbar_logo';}?>">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="navbar-brand <?php if ($uri === "/"){echo 'small_logo';}?>" href="/">
                        <img class="small_logo" src="./img/small_logo.png" alt="Prokinetix Logo" />
                    </a>
                    <div class="big_logo <?php if ($uri !== "/"){echo 'collapse';}?>">
                        <div class="index_logo_txt">
                            <h1 class="ProKinetix"><span class="text_blue">Pro</span><span class="text_lblue">Kinetix Physiotherapy</span></h1>
                            
                            <br>
                            <span class="text_blue">THERAPY IN MOTION</span>
                            
                        </div>
                    </div>
                    <div class="collapse <?php if ($uri === "/"){echo 'medium_logo';}?>">
                        <div class="index_logo_txt">
                            <h4 class="ProKinetix"><span class="text_blue">Pro</span><span class="text_lblue">Kinetix Physiotherapy</span></h4>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if ($uri === "/prokinetix/"){echo 'class="active"';}?>>
                            <a href="/prokinetix/">HOME</a>
                        </li>
                        <li <?php if ($uri === "/prokinetix/services.php"){echo 'class="active"';}?>>
                            <a href="/prokinetix/services.php">SERVICES</a>
                        </li>
                        <li <?php if ($uri === "/prokinetix/fees.php"){echo 'class="active"';}?>>
                            <a href="/prokinetix/fees.php">FEES</a>
                        </li>
                        <li <?php if ($uri === "/prokinetix/appointments.php"){echo 'class="active"';}?>>
                            <a href="/prokinetix/appointments.php">APPOINTMENTS</a>
                        </li>
                        <li <?php if ($uri === "/prokinetix/contact.php"){echo 'class="active"';}?>>
                            <a href="/prokinetix/contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="navgap"></div>
</body>

</html>


