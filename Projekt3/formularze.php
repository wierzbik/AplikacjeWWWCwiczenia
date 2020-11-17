<?php
if (!empty($_POST)) {
    require 'baza.php';

    $isValid = true;

    $danie = $_POST['danie'];
    $przepis = $_POST['przepis'];

    $danieError = null;
    $przepisError = null;


    if( empty($danie)){
        $isValid = false;
        $danieError = "Danie jest wymagane";
    }
    if( empty($przepis)){
        $isValid = false;
        $przepisError = "Przepis jest wymagany";
    }

    if($isValid){

        $sql = "INSERT INTO danie (danie,przepis)
            VALUES(?,?)";

        $pdo->prepare($sql)->execute([$danie, $przepis]);

    }
}?>

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
            <form action="formularze.php" method="POST">
               <div class="form-group">
                               <label for="exampleFormControlInput1">Podziel się z nami swoim daniem!</label>
                               <input type="text" name="danie" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz swoje danie">
                               </div>


                               <div class="form-group">
                               <label for="exampleFormControlInput1">Podziel sie również przepisem</label>
                               <input type="text" name="przepis" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz przepis">
                               </div>

                <button type="submit" class="btn btn-primary">Prześlij</button>
            </form>

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
