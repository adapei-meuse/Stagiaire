<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
    <title>Supprimer un logo</title>
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
    <?php 
    include 'connect.php'; 

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        
        $sql = "SELECT image FROM diocese WHERE id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $image_path = $row['image'];
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        $sql = "DELETE FROM diocese WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success text-center'>Lien supprimé avec succès.</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Erreur: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    $sql = "SELECT id, nom, image FROM diocese";
    $result = $conn->query($sql);
    ?>
    <header class="titre text-center py-3">
        <h1 class="titre">SUPPRIMER</h1>
    </header>
        <a href="DioceseVerdun.php" class="btn btn-light"><img src="img/retour.jpg" class="logo-verry-small"></a>
    
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <?php
                if ($result->num_rows > 0) {
                    echo '<thead class="thead-dark"><tr><th>Lien</th><th>Nom</th><th>Action</th></tr></thead><tbody>';
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td><img src="'.$row['image'].'" class="logo-uniform"></td>';
                        echo '<td>'.$row['nom'].'</td>';
                        echo '<td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="'.$row['id'].'">
                                    <input type="submit" name="delete" value="Supprimer" class="btn btn-danger">
                                </form>
                              </td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                } else {
                    echo '<tr><td colspan="3" class="text-center">Aucun lien disponible</td></tr>';
                }
                $conn->close();
                ?>
            </table>
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
