<?php
require("baza.php");
$pytanie = "SELECT * FROM danie";
$danie = $pdo->query($pytanie)->fetchAll();
?>


<!doctype html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styl.css" type="text/css" />

    <title> Specjały podlasia </title>
</head>
<body>
<h1 >Gastronomia podlasia</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <h3>Menu strony</h3>
            <li> <a href="index.html"> Strona główna</a> </li>

            <li> <a href="galeria.html" >Galeria</a></li>

            <li><a href="multimedia.html" >Przepisy</a></li>

            <li><a href="restauracje.php" >Przepisy użytkowników</a></li>

            <li><a href="formularze.php"> Ankiety</a></li>
        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-8">
            <h1>Kuchnia podlasia</h1>
            <table class="table">
                            <caption>Przepisy naszych użytkowników</caption>
                            <thead>
                            <tr>
                                <th scope="col">danie</th>
                                <th scope="col">przepis</th>
                            </tr>
                            </thead>
                            <?php
                            foreach($danie as $danie):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $danie["danie"]?></th>
                                <td><?php echo $danie["przepis"]?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tbody>
                        </table>

        </div>
        <!-- /.col-sm-4 -->
        <div class="col-sm-2">
            <h3>Kontakt</h3>
            <ul>
                <li>
                    Tel: 999-125-754
                </li>
                <li>
                    e-mail: bestgastropodlasie@gmail.com
                </li>
            </ul>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
