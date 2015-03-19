<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="GBAstyle.css">

    </head>



    <body>

        <div id='container'>

            <img class="logo" src="Images/GBLogo.png" alt="Mountain View">
            <div class="banner">
                <!-- Brand and toggle get grouped for better mobile display -->


                <div class="navbar">

                    <ul class="nav">

                        <li><a href="#home">HOME</a></li>
                        <li><a href="#news">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#about" style="border-right-style: none;">ABOUT</a></li>
                    </ul>
                </div>
            </div>


            <div class="content">
                <div class="media">
                    <audio controls>

                        <source src="Devil's Sugar.mp3" type="audio/mpeg">
                    </audio>
                </div>

                <div>
                    <?php 
                        include 'scripts/functions.php';
                        showList();
                    ?>    
                </div>

            </div>
        </div>
    </body>
</html>
