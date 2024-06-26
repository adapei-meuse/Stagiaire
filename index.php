<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
    <title>Service Informatique</title>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href='style5.css' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css' />
    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="img/icon.svg">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <style>
        .img-thumbnail {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            max-height: 150px;
        }
        
    </style>
</head>
<body class="index page-index bg-dark text-white d-flex flex-column min-vh-100">
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-md-4">
                <a href="Adapei.php"><img src="logo/adapei.png" class="img-thumbnail rounded" id="img1"></a>
            </div>
            <div class="col-md-4">
                <a href="DioceseVerdun.php"><img src="logo/diocese.png" class="img-thumbnail rounded" id="img2"></a>
            </div>
            <div class="col-md-4">
                <a href="Amseaa.php"><img src="logo/amseaa.jpg" class="img-thumbnail rounded" id="img3"></a>
            </div>
        </div>
        <br><br>
    </div>
    <br><br><br>
    <footer class="bg-light text-center py-3 mt-auto">
        <div class="footer text-dark">
            <b>Launchpad V2.0</b> © 2023 ADAPEI de la Meuse - <a href="https://github.com/adapei-meuse/launchpad">GitHub</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        
        document.getElementById('img1').addEventListener('mouseenter', function() {
            this.classList.add('rotate');
        });
        document.getElementById('img1').addEventListener('mouseleave', function() {
            this.classList.remove('rotate');
        });

        document.getElementById('img2').addEventListener('mouseenter', function() {
            this.classList.add('rotate');
        });
        document.getElementById('img2').addEventListener('mouseleave', function() {
            this.classList.remove('rotate');
        });

        document.getElementById('img3').addEventListener('mouseenter', function() {
            this.classList.add('rotate');
        });
        document.getElementById('img3').addEventListener('mouseleave', function() {
            this.classList.remove('rotate');
        });
        
    </script>
</body>
</html>