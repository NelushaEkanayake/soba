<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projrctsoba</title>


    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="asset/css/ayesha.css?v=2" rel="stylesheet">
    <link href="asset/css/roshan.css?v=2" rel="stylesheet">
    <link href="asset/css/shani.css?v=2" rel="stylesheet">
    <link href="asset/css/sanduni.css?v=2" rel="stylesheet">
    <link href="asset/css/nelusha.css?v=2" rel="stylesheet">
    <link href="asset/css/stykes.css?v=2" rel="stylesheet">
    <link href="asset/css/com.css?v=2" rel="stylesheet">
    <link href="asset/css/hirushani.css?v=2" rel="stylesheet">
    <link href="asset/css/kalana.css?v=2" rel="stylesheet">
</head>

<body onload="initMap();">

    <?php require_once('resources/header/index.php');

if( !isset($_GET['tag']) || $_GET['tag']=='home') {
        require_once('resources/slider/index.php');

        require_once('resources/newsmain/index.php');
        
        require_once('resources/about/index.php');

        require_once('resources/add/index.php');

        require_once('resources/cource/index.php');

        require_once('resources/service/index.php');

        require_once('resources/contact/index.php');


}
        elseif($_GET['tag']=='coursefull') {
          require_once('resources/coursefull/index.php');
        }

        
        elseif($_GET['tag']=='contact') {
            require_once('resources/map/index.php');
        }

        elseif($_GET['tag']=='news') {
          require_once('resources/news/index.php');
        }

        elseif($_GET['tag']=='newsde') {
          require_once('resources/newsdetails/index.php');
        }
        elseif($_GET['tag']=='newsde1') {
            require_once('resources/newd1/index.php');
          }
          elseif($_GET['tag']=='newsde2') {
            require_once('resources/newd2/index.php');
          }
        elseif($_GET['tag']=='more') {
            require_once('resources/more/index.php');
          }
          elseif($_GET['tag']=='more1') {
            require_once('resources/more/more1/index.php');

          }

          elseif($_GET['tag']=='more2') {
            require_once('resources/more/more2/index.php');

          }

          elseif($_GET['tag']=='more3') {
            require_once('resources/more/more3/index.php');

          }

          elseif($_GET['tag']=='more4') {
            require_once('resources/more/more4/index.php');

          }

          elseif($_GET['tag']=='more5') {
            require_once('resources/more/more5/index.php');

          }

          elseif($_GET['tag']=='more6') {
            require_once('resources/more/more6/index.php');

          }

          elseif($_GET['tag']=='more7') {
            require_once('resources/more/more7/index.php');

          }

          elseif($_GET['tag']=='more8') {
            require_once('resources/more/more8/index.php');

          }

          elseif($_GET['tag']=='more9') {
            require_once('resources/more/more9/index.php');

          }

          elseif($_GET['tag']=='more10') {
            require_once('resources/more/more10/index.php');

          }
          elseif($_GET['tag']=='staff') {
            require_once('resources/staff/index.php');
          }
          elseif($_GET['tag']=='services-2') {
            require_once('resources/services-2/index.php');
          }

        require_once('resources/footer/index.php');

       
       
    ?>

    <script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    $(function() {
        var navbar = $('.header-inner');
        $(window).scroll(function() {
            if ($(this).scrollTop() <= 40) {
                navbar.removeClass('navbar-scroll');
            } else {
                navbar.addClass('navbar-scroll');
            }
        });



    });
    </script>
    <script>
    $('#myCarousel').carousel({
        interval: 3000,
    })
    </script>

</body>

</html>