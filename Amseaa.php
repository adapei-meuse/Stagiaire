<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
    <title>Service Informatique</title>
    <meta charset='UTF-8'>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet' />
    <link href='style5.css' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css' />
    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="img/icon.svg">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
</head>
<body>
    <header class="titre text-center py-3">
        <h1 class="titre">AMSEAA</h1>
    </header>
        <a href="index.php" class="btn btn-light"><img src="img/retour.jpg" class="logo-verry-small"></a>
    
    
    <?php 
    include 'connect.php'; 

    $sql = "SELECT nom, redirection, image FROM amseaa";
    $result = $conn->query($sql);
    ?>
    
    <div class="container my-4">
        <div class="row justify-content-center">
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-3 col-sm-6 mb-4">';
                    echo '<div class="card h-100 text-center shadow p-3 mb-5 bg-body-tertiary rounded">';
                    echo '<div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded"><h5 class="card-title"><B>'.$row['nom'].'</B></h5></div>';
                    echo '<div class="card-body">';
                    echo '<a href="'.$row['redirection'].'">';
                    echo '<div class="shadow p-3 mb-1 bg-body-tertiary rounded"><img src="'.$row['image'].'" class="card-img-top logo-small"></a></div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-12 text-center">Aucun liens disponible</div>';
            }
            $conn->close();
            ?>
        </div>
    </div>
    
    <div class="container text-center my-4">
        <a href="ajouterAmseaa.php" class="btn btn-primary mx-2">Ajouter</a>
        <a href="supprimerAmseaa.php" class="btn btn-danger mx-2">Supprimer</a>
    </div>
    <br><br><br>
    
    <footer>
        <div class="footer">
            <b>Launchpad V2.0</b> © 2023 ADAPEI de la Meuse - <a href="https://github.com/adapei-meuse/launchpad">GitHub</a>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
