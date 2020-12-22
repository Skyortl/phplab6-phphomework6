<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            </header>
        </div>
        <div class="row">
            <nav class="col-xs-12 col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-lg navbar-light bg-light">
                <? 
                include_once('pages/menu.php');
                include_once('pages/functions.php');
                ?>
            </nav>
        </div>
        <div class="row">
            <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                if(isset($_GET['page']))
                    $page = $_GET['page'];
                    switch ($page) {
                        case '1':
                            include_once('pages/home.php');
                            break;
                        case '2':
                            include_once('pages/addImage.php');
                            break;
                        case '3':
                            include_once('pages/gallery.php');
                            break;
                        case '4':
                            include_once('pages/registration.php');
                            break;
                    }
                ?>
            </section>
        </div>
    </div>
</body>

</html>