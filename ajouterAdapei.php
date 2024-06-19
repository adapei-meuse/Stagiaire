<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
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
        <h1 class="titre">AJOUTER</h1>
    </header>
    <?php 
    include 'connect.php'; 

    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $redirection = $_POST['redirection'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $uploads_dir = 'uploads';
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        $target_file = $uploads_dir . '/' . basename($image);

        if (move_uploaded_file($image_tmp, $target_file)) {
            $sql = "INSERT INTO adapei (nom, redirection, image) VALUES ('$nom', '$redirection', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success text-center'>Nouveau lien ajouté avec succès.</div>";
            } else {
                echo "<div class='alert alert-danger text-center'>Erreur: " . $sql . "<br>" . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger text-center'>Erreur lors du téléchargement de l'image.</div>";
        }
    }
    ?>
        <a href="Adapei.php" class="btn btn-light"><img src="img/retour.jpg" class="logo-verry-small"></a>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data" class="form-group">
                    <label class=text for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" class="form-control" required><br>
                    <label class=text for="redirection">Redirection URL:</label>
                    <input type="text" id="redirection" name="redirection" class="form-control" required><br>
                    <label class=text for="image">Sélectionner une image:</label><br>
                    <input class=text type="file" id="image" name="image" class="form-control-file" accept="image/*" required><br>
                    <input type="submit" name="submit" value="Valider" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
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